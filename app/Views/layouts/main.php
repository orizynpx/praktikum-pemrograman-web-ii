<!DOCTYPE html>
<html lang="id">

<head>
    <title><?= $this->renderSection('title') ?></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-slate-950 text-slate-100 flex flex-col min-h-screen font-sans">
    <header class="bg-slate-900 sticky top-0 z-50">
        <div class="max-w-5xl mx-auto px-6 h-16 flex items-center justify-between">
            <p class="text-xl font-bold text-lime-200 tracking-tight">Solomon Profile</p>

            <nav class="flex gap-2">
                <a href="<?= base_url() ?>"
                    class="px-3 py-1.5 font-medium text-slate-400 hover:text-lime-300 rounded-md transition-colors">
                    Beranda
                </a>
                <a href="<?= base_url('profile') ?>"
                    class="px-3 py-1.5 font-medium text-slate-400 hover:text-lime-300 rounded-md transition-colors">
                    Profil
                </a>
            </nav>
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center max-w-5xl w-full mx-auto px-6 py-12">
        <?= $this->renderSection('content') ?>
    </main>

</body>

</html>