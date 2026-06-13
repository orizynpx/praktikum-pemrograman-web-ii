<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gray-100 flex items-center justify-center">

    <div class="bg-white w-full max-w-md rounded-2xl shadow-md p-8">

        <h1 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Login</h1>

        <?php if (!empty($error)): ?>
            <div class="mb-4 px-4 py-3 bg-red-50 border border-red-300 text-red-700 rounded-lg text-sm">
                <?= esc($error) ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($success)): ?>
            <div class="mb-4 px-4 py-3 bg-green-50 border border-green-300 text-green-700 rounded-lg text-sm">
                <?= esc($success) ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/login') ?>" method="post" novalidate>
            <?= csrf_field() ?>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" id="email" name="email" value="<?= esc($old_email ?? old('email')) ?>"
                    placeholder="contoh@email.com" class="w-full px-4 py-2 border rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-indigo-400
                 <?= ($validation->hasError('email')) ? 'border-red-400 bg-red-50' : 'border-gray-300' ?>">
                <?php if ($validation->hasError('email')): ?>
                    <p class="mt-1 text-xs text-red-600"><?= $validation->getError('email') ?></p>
                <?php endif; ?>
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" id="password" name="password" placeholder="Minimal 6 karakter" class="w-full px-4 py-2 border rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-indigo-400
                 <?= ($validation->hasError('password')) ? 'border-red-400 bg-red-50' : 'border-gray-300' ?>">
                <?php if ($validation->hasError('password')): ?>
                    <p class="mt-1 text-xs text-red-600"><?= $validation->getError('password') ?></p>
                <?php endif; ?>
            </div>

            <button type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-lg transition duration-200">
                Masuk
            </button>
        </form>

    </div>

</body>

</html>