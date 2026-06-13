<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <nav class="bg-indigo-600 text-white p-4 flex items-center justify-between shadow-sm">
        <span class="font-bold">Manajemen Buku</span>
        <div class="flex items-center gap-4 text-sm">
            <span>Halo, <strong><?= esc(session()->get('username')) ?></strong></span>
            <a href="<?= base_url('/logout') ?>" class="bg-white text-indigo-600 px-3 py-1 rounded hover:bg-indigo-50 font-medium text-xs">
                Logout
            </a>
        </div>
    </nav>

    <div class="max-w-2xl mx-auto p-4">

        <nav class="text-sm text-gray-500 mb-4 flex items-center gap-1.5">
            <a href="<?= base_url('/buku') ?>" class="hover:text-indigo-600">Daftar Buku</a>
            <span>/</span>
            <span class="text-gray-800">Edit Buku</span>
        </nav>

        <div class="bg-white rounded shadow p-6">
            <h1 class="text-xl font-bold mb-6">Edit Data Buku</h1>

            <form action="<?= base_url('/buku/update/' . $buku['id']) ?>" method="post" novalidate>
                <?= csrf_field() ?>

                <div class="mb-4">
                    <label for="judul" class="block text-sm font-medium mb-1">
                        Judul <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="judul" name="judul" value="<?= old('judul', esc($buku['judul'])) ?>"
                        placeholder="Masukkan judul buku" class="w-full p-2 border rounded text-sm focus:outline-none <?= $validation->hasError('judul') ? 'border-red-500 bg-red-50' : 'border-gray-300' ?>">
                    <?php if ($validation->hasError('judul')): ?>
                        <p class="mt-1 text-xs text-red-600"><?= $validation->getError('judul') ?></p>
                    <?php endif; ?>
                </div>

                <div class="mb-4">
                    <label for="penulis" class="block text-sm font-medium mb-1">
                        Penulis <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="penulis" name="penulis" value="<?= old('penulis', esc($buku['penulis'])) ?>"
                        placeholder="Masukkan nama penulis" class="w-full p-2 border rounded text-sm focus:outline-none <?= $validation->hasError('penulis') ? 'border-red-500 bg-red-50' : 'border-gray-300' ?>">
                    <?php if ($validation->hasError('penulis')): ?>
                        <p class="mt-1 text-xs text-red-600"><?= $validation->getError('penulis') ?></p>
                    <?php endif; ?>
                </div>

                <div class="mb-4">
                    <label for="penerbit" class="block text-sm font-medium mb-1">
                        Penerbit <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="penerbit" name="penerbit" value="<?= old('penerbit', esc($buku['penerbit'])) ?>" 
                        placeholder="Masukkan nama penerbit" class="w-full p-2 border rounded text-sm focus:outline-none <?= $validation->hasError('penerbit') ? 'border-red-500 bg-red-50' : 'border-gray-300' ?>">
                    <?php if ($validation->hasError('penerbit')): ?>
                        <p class="mt-1 text-xs text-red-600"><?= $validation->getError('penerbit') ?></p>
                    <?php endif; ?>
                </div>

                <div class="mb-6">
                    <label for="tahun_terbit" class="block text-sm font-medium mb-1">
                        Tahun Terbit <span class="text-red-500">*</span>
                    </label>
                    <input type="number" id="tahun_terbit" name="tahun_terbit" value="<?= old('tahun_terbit', esc($buku['tahun_terbit'])) ?>" 
                        placeholder="Contoh: 2020" min="1801" max="2023" class="w-full p-2 border rounded text-sm focus:outline-none <?= $validation->hasError('tahun_terbit') ? 'border-red-500 bg-red-50' : 'border-gray-300' ?>">
                    <?php if ($validation->hasError('tahun_terbit')): ?>
                        <p class="mt-1 text-xs text-red-600"><?= $validation->getError('tahun_terbit') ?></p>
                    <?php else: ?>
                        <p class="mt-1 text-xs text-gray-400 italic">Range: 1801 - 2023</p>
                    <?php endif; ?>
                </div>

                <div class="flex items-center gap-3">
                    <a href="<?= base_url('/buku') ?>" class="bg-gray-100 text-gray-700 px-4 py-2 rounded text-sm hover:bg-gray-200 text-center">
                        Batal
                    </a>
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded text-sm font-medium">
                        Perbarui
                    </button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>