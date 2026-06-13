<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= esc($title) ?>
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-indigo-600 text-white px-6 py-4 flex items-center justify-between shadow">
        <span class="font-semibold text-lg tracking-wide">Manajemen Buku</span>
        <div class="flex items-center gap-4 text-sm">
            <span class="opacity-80">Halo, <strong>
                    <?= esc(session()->get('username')) ?>
                </strong></span>
            <a href="<?= base_url('/logout') ?>"
                class="bg-white text-indigo-600 font-medium px-4 py-1.5 rounded-lg hover:bg-indigo-50 transition">
                Logout
            </a>
        </div>
    </nav>

    <div class="max-w-5xl mx-auto px-4 py-8">

        <!-- Flash success -->
        <?php if (!empty($success)): ?>
            <div
                class="mb-5 px-4 py-3 bg-green-50 border border-green-300 text-green-700 rounded-lg text-sm flex items-center gap-2">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
                <?= esc($success) ?>
            </div>
        <?php endif; ?>

        <!-- Flash error -->
        <?php if (!empty($error)): ?>
            <div
                class="mb-5 px-4 py-3 bg-red-50 border border-red-300 text-red-700 rounded-lg text-sm flex items-center gap-2">
                <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <?= esc($error) ?>
            </div>
        <?php endif; ?>

        <!-- Header -->
        <div class="flex items-center justify-between mb-5">
            <h1 class="text-xl font-semibold text-gray-800">Daftar Buku</h1>
            <a href="<?= base_url('/buku/create') ?>"
                class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded-lg transition flex items-center gap-1.5">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                </svg>
                Tambah Buku
            </a>
        </div>

        <!-- Tabel -->
        <div class="bg-white rounded-xl shadow overflow-hidden">
            <?php if (empty($buku)): ?>
                <div class="py-16 text-center text-gray-400 text-sm">
                    Belum ada data buku. Klik <strong>Tambah Buku</strong> untuk menambahkan.
                </div>
            <?php else: ?>
                <table class="w-full text-sm text-left">
                    <thead class="bg-gray-50 text-gray-600 uppercase text-xs tracking-wide">
                        <tr>
                            <th class="px-5 py-3 w-10">#</th>
                            <th class="px-5 py-3">Judul</th>
                            <th class="px-5 py-3">Penulis</th>
                            <th class="px-5 py-3">Penerbit</th>
                            <th class="px-5 py-3 text-center">Tahun</th>
                            <th class="px-5 py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <?php foreach ($buku as $i => $b): ?>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-5 py-3 text-gray-400">
                                    <?= $i + 1 ?>
                                </td>
                                <td class="px-5 py-3 font-medium text-gray-800">
                                    <?= esc($b['judul']) ?>
                                </td>
                                <td class="px-5 py-3 text-gray-600">
                                    <?= esc($b['penulis']) ?>
                                </td>
                                <td class="px-5 py-3 text-gray-600">
                                    <?= esc($b['penerbit']) ?>
                                </td>
                                <td class="px-5 py-3 text-center text-gray-600">
                                    <?= esc($b['tahun_terbit']) ?>
                                </td>
                                <td class="px-5 py-3 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <!-- Edit -->
                                        <a href="<?= base_url('/buku/edit/' . $b['id']) ?>"
                                            class="inline-flex items-center gap-1 text-xs bg-yellow-50 text-yellow-700 border border-yellow-200 px-3 py-1.5 rounded-lg hover:bg-yellow-100 transition font-medium">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                            Edit
                                        </a>
                                        <!-- Hapus -->
                                        <a href="<?= base_url('/buku/delete/' . $b['id']) ?>"
                                            onclick="return confirm('Yakin ingin menghapus buku ini?')"
                                            class="inline-flex items-center gap-1 text-xs bg-red-50 text-red-700 border border-red-200 px-3 py-1.5 rounded-lg hover:bg-red-100 transition font-medium">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                            Hapus
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>

    </div>
</body>

</html>