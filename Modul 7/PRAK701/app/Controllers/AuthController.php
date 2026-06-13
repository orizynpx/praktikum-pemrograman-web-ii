<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class AuthController extends BaseController
{
    protected $userModel;
    protected $session;

    public function __construct()
    {
        $this->userModel = new User();
        $this->session = session();
    }

    public function index() {
        if ($this->session->get('user_id')) {
            return redirect()->to('/buku');
        }

        $data = [
            'title' => 'Login',
            'error' => $this->session->getFlashdata('error'),
            'success' => $this->session->getFlashdata('success'),
            'old_email' => $this->session->getFlashdata('old_email'),
            'validation' => \Config\Services::validation()
        ];

        return view('auth/login', $data);
    }

    public function login()
    {
        $this->session->setFlashdata('submitted', true);

        $rules = [
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email harus diisi.',
                    'valid_email' => 'Format email tidak valid.'
                ],
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => 'Password harus diisi.',
                    'min_length' => 'Password harus memiliki minimal 6 karakter.'
                ],
            ],
        ];

        if (!$this->validate($rules)) {
            $this->session->setFlashdata('_ci_old_input', $this->request->getPost());
            $data = [
                'title' => 'Login',
                'error' => $this->session->getFlashdata('error'),
                'success' => $this->session->getFlashdata('success'),
                'old_email' => $this->request->getPost('email'),
                'validation' => \Config\Services::validation()
            ];
            return view('auth/login', $data);
        }

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $this->userModel->where('email', $email)->first();
        if (!$user) {
            $this->session->setFlashdata('error', 'Email atau password salah.');
            $this->session->setFlashdata('old_email', $email);
            return redirect()->to('/login');
        }

        if (!password_verify($password, $user['password'])) {
            $this->session->setFlashdata('error', 'Email atau password salah.');
            $this->session->setFlashdata('old_email', $email);
            return redirect()->to('/login');
        }

        $this->session->set([
            'user_id' => $user['id'],
            'username' => $user['username'],
            'email' => $user['email'],
            'logged_in' => true,
        ]);
        return redirect()->to('/buku');
    }

    public function logout()
    {
        $this->session->destroy();
        $this->session->setFlashdata('success', 'Anda berhasil logout.');
        return redirect()->to('/login');
    }
}
