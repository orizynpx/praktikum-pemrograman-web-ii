<?= $this->extend('layouts/main') ?>
<?= $this->section('title') ?>Beranda<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="w-full max-w-xl py-12 text-center sm:text-left space-y-8">
    <div class="space-y-4">
        <span class="inline-flex items-center px-3 py-1 font-semibold text-lime-200 bg-slate-900 rounded-full">
            Hello, World!
        </span>
        <h1 class="text-4xl sm:text-5xl font-bold tracking-tight text-slate-100 leading-tight">
            Selamat datang di <span class="font-extrabold text-lime-200">Solomon Profile</span>
        </h1>
        <p class="text-base sm:text-lg text-slate-400 leading-relaxed max-w-xl">
            Situs ini dikembangkan oleh <span class="text-slate-200 font-semibold"><?= $profile['name'] ?></span> dengan
            NIM <span class="text-lime-200 font-mono"><?= $profile['id'] ?></span>.
        </p>
    </div>
    <div class="pt-2">
        <a href="<?= base_url('profile'); ?>"
            class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-slate-950 bg-lime-200 hover:bg-lime-400 rounded-lg transition-colors duration-200">
            Lihat Detail Profil
        </a>
    </div>
</div>
<?= $this->endSection() ?>