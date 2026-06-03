<?= $this->extend('layouts/main') ?>
<?= $this->section('title') ?>Beranda<?= $this->endSection() ?>
<?= $this->section('content') ?>
<h1 class="text-xl font-bold">Beranda</h1>
<p>Selamat datang di situs saya</p>
<p class="text-gray-600">Situs ini dikembangkan oleh <?= $profile['name'] ?> dengan NIM <?=  $profile['id'] ?>.</p>
<a href="<?= base_url('profile'); ?>">Kunjungi Profil</a>
<?= $this->endSection() ?>