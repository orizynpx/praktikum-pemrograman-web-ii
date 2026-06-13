<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex min-h-screen items-center justify-center p-4">

    <div class="bg-white w-full max-w-sm p-6 rounded-lg shadow">

        <h1 class="text-xl font-bold mb-6 text-center">Login</h1>

        <?php if (!empty($error)): ?>
            <div class="mb-4 p-3 bg-red-100 text-red-800 rounded text-sm">
                <?= esc($error) ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($success)): ?>
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded text-sm">
                <?= esc($success) ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/login') ?>" method="post" novalidate>
            <?= csrf_field() ?>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium mb-1">Email</label>
                <input type="email" id="email" name="email" value="<?= esc($old_email ?? old('email')) ?>"
                    placeholder="contoh@email.com" class="w-full p-2 border rounded text-sm focus:outline-none <?= ($validation->hasError('email')) ? 'border-red-500 bg-red-50' : 'border-gray-300' ?>">
                <?php if ($validation->hasError('email')): ?>
                    <p class="mt-1 text-xs text-red-600"><?= $validation->getError('email') ?></p>
                <?php endif; ?>
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium mb-1">Password</label>
                <input type="password" id="password" name="password" placeholder="Minimal 6 karakter" class="w-full p-2 border rounded text-sm focus:outline-none <?= ($validation->hasError('password')) ? 'border-red-500 bg-red-50' : 'border-gray-300' ?>">
                <?php if ($validation->hasError('password')): ?>
                    <p class="mt-1 text-xs text-red-600"><?= $validation->getError('password') ?></p>
                <?php endif; ?>
            </div>

            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white p-2 rounded font-medium">
                Masuk
            </button>
        </form>

    </div>

</body>

</html>