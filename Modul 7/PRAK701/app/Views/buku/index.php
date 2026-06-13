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

    <div class="max-w-4xl mx-auto p-4">
        <?php if (!empty($success) || !empty($error)): ?>
            <div class="mb-4 p-3 rounded text-sm <?= !empty($success) ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' ?>">
                <?= !empty($success) ? esc($success) : esc($error) ?>
            </div>
        <?php endif; ?>

        <div class="flex items-center justify-between mb-6">
            <h1 class="text-xl font-bold">Daftar Buku</h1>
            <a href="<?= base_url('/buku/create') ?>" class="bg-indigo-600 text-white px-3 py-2 rounded text-sm hover:bg-indigo-700 flex items-center gap-1.5 font-medium">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4" /></svg>
                Tambah Buku
            </a>
        </div>

        <div class="bg-white rounded shadow overflow-hidden p-4">
            <div class="overflow-x-auto">
                <?php if (empty($buku)): ?>
                    <div class="py-12 text-center text-gray-400 text-sm">Belum ada data buku.</div>
                <?php else: ?>
                    <table class="w-full text-sm text-left border border-gray-200 border-collapse">
                        <thead class="bg-gray-50 text-xs font-semibold text-gray-700">
                            <tr>
                                <th class="p-3 border border-gray-200">Judul</th>
                                <th class="p-3 border border-gray-200">Penulis</th>
                                <th class="p-3 border border-gray-200">Penerbit</th>
                                <th class="p-3 border border-gray-200 text-center">Tahun</th>
                                <th class="p-3 border border-gray-200 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <?php foreach ($buku as $b): ?>
                                <tr class="hover:bg-gray-50">
                                    <td class="p-3 border border-gray-200 font-medium"><?= esc($b['judul']) ?></td>
                                    <td class="p-3 border border-gray-200 text-gray-600"><?= esc($b['penulis']) ?></td>
                                    <td class="p-3 border border-gray-200 text-gray-600"><?= esc($b['penerbit']) ?></td>
                                    <td class="p-3 border border-gray-200 text-center text-gray-600"><?= esc($b['tahun_terbit']) ?></td>
                                    <td class="p-3 border border-gray-200">
                                        <div class="flex items-center justify-center gap-2">
                                            <a href="<?= base_url('/buku/edit/'.$b['id']) ?>" class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs hover:bg-yellow-200">Edit</a>
                                            <a href="<?= base_url('/buku/delete/'.$b['id']) ?>" class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs hover:bg-red-200">Hapus</a>
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