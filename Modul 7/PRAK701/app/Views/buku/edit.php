<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gray-100">

    <nav class="bg-indigo-600 text-white px-4 py-4 sm:px-6 flex flex-col sm:flex-row items-center justify-between shadow gap-4">
        <span class="font-semibold text-lg tracking-wide">Manajemen Buku</span>
        <div class="flex items-center gap-4 text-sm w-full sm:w-auto justify-between sm:justify-end">
            <span class="opacity-80">Halo, <strong><?= esc(session()->get('username')) ?></strong></span>
            <a href="<?= base_url('/logout') ?>"
                class="bg-white text-indigo-600 font-medium px-4 py-1.5 rounded-lg hover:bg-indigo-50 transition">
                Logout
            </a>
        </div>
    </nav>

    <div class="max-w-2xl mx-auto px-4 py-6 sm:py-8">

        <nav class="text-sm text-gray-500 mb-5 flex items-center gap-1.5 overflow-x-auto whitespace-nowrap pb-1 sm:pb-0">
            <a href="<?= base_url('/buku') ?>" class="hover:text-indigo-600 transition">Daftar Buku</a>
            <span class="text-gray-400">/</span>
            <span class="text-gray-800">Edit Buku</span>
        </nav>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5 sm:p-8">
            <h1 class="text-xl font-bold text-gray-800 mb-6">Edit Data Buku</h1>

            <form action="<?= base_url('/buku/update/' . $buku['id']) ?>" method="post" novalidate>
                <?= csrf_field() ?>

                <div class="mb-5">
                    <label for="judul" class="block text-sm font-semibold text-gray-700 mb-1.5">
                        Judul <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="judul" name="judul" value="<?= old('judul', esc($buku['judul'])) ?>"
                        placeholder="Masukkan judul buku" class="w-full px-4 py-2.5 text-sm border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition
                   <?= $validation->hasError('judul') ? 'border-red-400 bg-red-50' : 'border-gray-300' ?>">
                    <?php if ($validation->hasError('judul')): ?>
                        <p class="mt-1.5 text-xs text-red-600 font-medium"><?= $validation->getError('judul') ?></p>
                    <?php endif; ?>
                </div>

                <div class="mb-5">
                    <label for="penulis" class="block text-sm font-semibold text-gray-700 mb-1.5">
                        Penulis <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="penulis" name="penulis" value="<?= old('penulis', esc($buku['penulis'])) ?>"
                        placeholder="Masukkan nama penulis" class="w-full px-4 py-2.5 text-sm border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition
                   <?= $validation->hasError('penulis') ? 'border-red-400 bg-red-50' : 'border-gray-300' ?>">
                    <?php if ($validation->hasError('penulis')): ?>
                        <p class="mt-1.5 text-xs text-red-600 font-medium"><?= $validation->getError('penulis') ?></p>
                    <?php endif; ?>
                </div>

                <div class="mb-5">
                    <label for="penerbit" class="block text-sm font-semibold text-gray-700 mb-1.5">
                        Penerbit <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="penerbit" name="penerbit" value="<?= old('penerbit', esc($buku['penerbit'])) ?>" 
                        placeholder="Masukkan nama penerbit" class="w-full px-4 py-2.5 text-sm border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition
                   <?= $validation->hasError('penerbit') ? 'border-red-400 bg-red-50' : 'border-gray-300' ?>">
                    <?php if ($validation->hasError('penerbit')): ?>
                        <p class="mt-1.5 text-xs text-red-600 font-medium"><?= $validation->getError('penerbit') ?></p>
                    <?php endif; ?>
                </div>

                <div class="mb-8">
                    <label for="tahun_terbit" class="block text-sm font-semibold text-gray-700 mb-1.5">
                        Tahun Terbit <span class="text-red-500">*</span>
                    </label>
                    <input type="number" id="tahun_terbit" name="tahun_terbit" value="<?= old('tahun_terbit', esc($buku['tahun_terbit'])) ?>" 
                        placeholder="Contoh: 2020" min="1801" max="2023" class="w-full px-4 py-2.5 text-sm border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400 transition
                   <?= $validation->hasError('tahun_terbit') ? 'border-red-400 bg-red-50' : 'border-gray-300' ?>">
                    <?php if ($validation->hasError('tahun_terbit')): ?>
                        <p class="mt-1.5 text-xs text-red-600 font-medium"><?= $validation->getError('tahun_terbit') ?></p>
                    <?php else: ?>
                        <p class="mt-1.5 text-xs text-gray-400 italic">Range: 1801 - 2023</p>
                    <?php endif; ?>
                </div>

                <div class="flex flex-col-reverse sm:flex-row items-center gap-3">
                    <a href="<?= base_url('/buku') ?>"
                        class="w-full sm:w-auto text-center text-sm text-gray-500 hover:text-gray-700 px-6 py-2.5 rounded-lg border border-gray-200 hover:border-gray-300 hover:bg-gray-50 transition font-medium">
                        Batal
                    </a>
                    <button type="submit"
                        class="w-full sm:w-auto bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-bold px-8 py-2.5 rounded-lg shadow-sm shadow-indigo-200 transition">
                        Perbarui
                    </button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>