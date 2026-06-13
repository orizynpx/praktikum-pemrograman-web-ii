<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Buku;

class BukuController extends BaseController
{
    protected $bukuModel;
    protected $session;

    public function __construct()
    {
        $this->bukuModel = new Buku();
        $this->session = session();
        helper(['form', 'url']);
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Buku',
            'buku' => $this->bukuModel->orderBy('id', 'DESC')->findAll(),
            'success' => $this->session->getFlashdata('success'),
            'error' => $this->session->getFlashdata('error'),
        ];
        return view('buku/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Buku',
            'validation' => \Config\Services::validation(),
        ];
        return view('buku/create', $data);
    }

    public function store()
    {
        $rules = [
            'judul' => [
                'label' => 'Judul',
                'rules' => 'required|string|max_length[255]',
                'errors' => [
                    'required' => 'Judul harus diisi.',
                    'string' => 'Judul harus berupa teks.',
                    'max_length' => 'Judul maksimal 255 karakter.',
                ],
            ],
            'penulis' => [
                'label' => 'Penulis',
                'rules' => 'required|string|max_length[255]',
                'errors' => [
                    'required' => 'Penulis harus diisi.',
                    'string' => 'Penulis harus berupa teks.',
                    'max_length' => 'Penulis maksimal 255 karakter.',
                ],
            ],
            'penerbit' => [
                'label' => 'Penerbit',
                'rules' => 'required|string|max_length[255]',
                'errors' => [
                    'required' => 'Penerbit harus diisi.',
                    'string' => 'Penerbit harus berupa teks.',
                    'max_length' => 'Penerbit maksimal 255 karakter.',
                ],
            ],
            'tahun_terbit' => [
                'label' => 'Tahun Terbit',
                'rules' => 'required|integer|greater_than[1800]|less_than[2024]',
                'errors' => [
                    'required' => 'Tahun terbit harus diisi.',
                    'integer' => 'Tahun terbit harus berupa angka.',
                    'greater_than' => 'Tahun terbit harus lebih besar dari 1800.',
                    'less_than' => 'Tahun terbit harus lebih kecil dari 2024.',
                ],
            ],
        ];

        if (!$this->validate($rules)) {
            $this->session->setFlashdata('_ci_old_input', $this->request->getPost());
            $data = [
                'title' => 'Tambah Buku',
                'validation' => \Config\Services::validation(),
            ];
            return view('buku/create', $data);
        }

        $this->bukuModel->insert([
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        $this->session->setFlashdata('success', 'Buku berhasil ditambahkan.');
        return redirect()->to('/buku');
    }

    public function edit($id = null)
    {
        if (empty($id) || !is_numeric($id) || (int) $id <= 0) {
            $this->session->setFlashdata('error', 'Invalid book id.');
            return redirect()->to('/buku');
        }

        $buku = $this->bukuModel->find($id);

        if (! $buku) {
            $this->session->setFlashdata('error', 'Data buku tidak ditemukan.');
            return redirect()->to('/buku');
        }

        $data = [
            'title' => 'Edit Buku',
            'buku' => $buku,
            'validation' => \Config\Services::validation(),
        ];

        return view('buku/edit', $data);
    }

    public function update($id = null)
    {
        if (empty($id) || !is_numeric($id) || (int) $id <= 0) {
            $this->session->setFlashdata('error', 'Invalid book id.');
            return redirect()->to('/buku');
        }

        $buku = $this->bukuModel->find($id);

        if (! $buku) {
            $this->session->setFlashdata('error', 'Data buku tidak ditemukan.');
            return redirect()->to('/buku');
        }

        $rules = [
            'judul' => [
                'label' => 'Judul',
                'rules' => 'required|string|max_length[255]',
                'errors' => [
                    'required' => 'Judul harus diisi.',
                    'string' => 'Judul harus berupa teks.',
                    'max_length' => 'Judul maksimal 255 karakter.',
                ],
            ],
            'penulis' => [
                'label' => 'Penulis',
                'rules' => 'required|string|max_length[255]',
                'errors' => [
                    'required' => 'Penulis harus diisi.',
                    'string' => 'Penulis harus berupa teks.',
                    'max_length' => 'Penulis maksimal 255 karakter.',
                ],
            ],
            'penerbit' => [
                'label' => 'Penerbit',
                'rules' => 'required|string|max_length[255]',
                'errors' => [
                    'required' => 'Penerbit harus diisi.',
                    'string' => 'Penerbit harus berupa teks.',
                    'max_length' => 'Penerbit maksimal 255 karakter.',
                ],
            ],
            'tahun_terbit' => [
                'label' => 'Tahun Terbit',
                'rules' => 'required|integer|greater_than[1800]|less_than[2024]',
                'errors' => [
                    'required' => 'Tahun terbit harus diisi.',
                    'integer' => 'Tahun terbit harus berupa angka.',
                    'greater_than' => 'Tahun terbit harus lebih besar dari 1800.',
                    'less_than' => 'Tahun terbit harus lebih kecil dari 2024.',
                ],
            ],
        ];

        if (!$this->validate($rules)) {
            $buku = $this->bukuModel->find($id);
            $this->session->setFlashdata('_ci_old_input', $this->request->getPost());
            $data = [
                'title' => 'Edit Buku',
                'buku' => $buku,
                'validation' => \Config\Services::validation(),
            ];
            return view('buku/edit', $data);
        }

        $this->bukuModel->update($id, [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        $this->session->setFlashdata('success', 'Buku berhasil diperbarui.');
        return redirect()->to('/buku');
    }

    public function delete($id = null)
    {
        if (empty($id) || !is_numeric($id) || (int) $id <= 0) {
            $this->session->setFlashdata('error', 'Invalid book id.');
            return redirect()->to('/buku');
        }

        $buku = $this->bukuModel->find($id);

        if (! $buku) {
            $this->session->setFlashdata('error', 'Data buku tidak ditemukan.');
            return redirect()->to('/buku');
        }

        $this->bukuModel->delete($id);

        $this->session->setFlashdata('success', 'Buku berhasil dihapus.');
        return redirect()->to('/buku');
    }
}