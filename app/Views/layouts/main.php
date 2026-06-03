<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $this->renderSection('title') ?></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen font-sans">

    <!-- Header & Navbar -->
    <header class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-0 sm:h-16 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 sm:gap-0">

            <!-- Branding / Title -->
            <p class="text-xl font-bold text-gray-900 tracking-tight">Portofolio Sulaiman</h1>

                <!-- Navigation Links -->
            <nav class="flex gap-2 sm:gap-1">
                <a href="<?= base_url() ?>"
                    class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100 rounded-md transition-colors">
                    Beranda
                </a>
                <a href="<?= base_url('profile') ?>"
                    class="px-3 py-2 text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100 rounded-md transition-colors">
                    Profil
                </a>
            </nav>

        </div>
    </header>

    <main class="flex-grow max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- <footer class=" bg-gray-900 text-gray-400 border-t border-gray-800">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-sm">&copy; 2026 My Website. All rights reserved.</p>
            <div class="flex gap-4 text-sm">
                <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
            </div>
        </div>
    </footer> -->

</body>

</html>