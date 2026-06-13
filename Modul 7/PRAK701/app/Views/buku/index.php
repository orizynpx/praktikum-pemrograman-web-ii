<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-indigo-600 text-white px-4 py-4 sm:px-6 flex flex-col sm:flex-row items-center justify-between shadow gap-4">
        <span class="font-semibold text-lg tracking-wide">Manajemen Buku</span>
        <div class="flex items-center gap-4 text-sm w-full sm:w-auto justify-between sm:justify-end">
            <span class="opacity-80">Halo, <strong><?= esc(session()->get('username')) ?></strong></span>
            <a href="<?= base_url('/logout') ?>" class="bg-white text-indigo-600 font-medium px-4 py-1.5 rounded-lg hover:bg-indigo-50 transition">
                Logout
            </a>
        </div>
    </nav>

    <div class="max-w-5xl mx-auto px-4 py-8">
        <!-- Flash messages remain same -->
        <?php if (!empty($success) || !empty($error)): ?>
            <div class="mb-5 px-4 py-3 <?= !empty($success) ? 'bg-green-50 border-green-300 text-green-700' : 'bg-red-50 border-red-300 text-red-700' ?> border rounded-lg text-sm flex items-center gap-2">
                <?= !empty($success) ? esc($success) : esc($error) ?>
            </div>
        <?php endif; ?>

        <!-- Header -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-6 gap-4">
            <h1 class="text-2xl font-bold text-gray-800">Daftar Buku</h1>
            <a href="<?= base_url('/buku/create') ?>" class="w-full sm:w-auto justify-center bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-5 py-2.5 rounded-lg transition flex items-center gap-1.5">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4" /></svg>
                Tambah Buku
            </a>
        </div>

        <!-- Responsive Table Container -->
        <div class="bg-white rounded-xl shadow overflow-hidden">
            <div class="overflow-x-auto">
                <?php if (empty($buku)): ?>
                    <div class="py-16 text-center text-gray-400 text-sm">Belum ada data buku.</div>
                <?php else: ?>
                    <table class="w-full text-sm text-left min-w-[600px]">
                        <thead class="bg-gray-50 text-gray-600 uppercase text-xs font-bold">
                            <tr>
                                <th class="px-6 py-4">Judul</th>
                                <th class="px-6 py-4">Penulis</th>
                                <th class="px-6 py-4 text-center">Tahun</th>
                                <th class="px-6 py-4 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <?php foreach ($buku as $b): ?>
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-6 py-4 font-medium text-gray-900"><?= esc($b['judul']) ?></td>
                                    <td class="px-6 py-4 text-gray-600"><?= esc($b['penulis']) ?></td>
                                    <td class="px-6 py-4 text-center text-gray-600"><?= esc($b['tahun_terbit']) ?></td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center justify-center gap-2">
                                            <a href="<?= base_url('/buku/edit/'.$b['id']) ?>" class="p-2 text-yellow-600 hover:bg-yellow-50 rounded-lg">Edit</a>
                                            <a href="<?= base_url('/buku/delete/'.$b['id']) ?>" class="p-2 text-red-600 hover:bg-red-50 rounded-lg">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>