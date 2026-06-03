<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Profil
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="w-full max-w-4xl py-4">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12">
        <div class="md:col-span-5 flex flex-col space-y-6">
            <div class="w-full">
                <img class="w-full aspect-square object-cover rounded-2xl bg-slate-900 shadow-md"
                    src="<?= base_url($profile['picture']) ?>" alt="Foto Profil">
            </div>

            <div class="space-y-3">
                <h1 class="text-4xl font-bold text-slate-100 tracking-tight leading-tight">
                    <?= $profile['name'] ?>
                </h1>
                <p class="text-lg font-medium text-lime-200 tracking-wide font-mono">
                    <?= $profile['id'] ?>
                </p>
                <p class="text-lg text-slate-400">
                    <?= $profile['department'] ?>
                </p>

                <div class="pt-6 space-y-2">
                    <p class="font-semibold text-slate-500 text-xl">Organisasi</p>
                    <div class="p-4 bg-slate-900 rounded-xl">
                        <div class="flex items-center space-x-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-lime-200"></span>
                            <h4 class="text-lg font-semibold text-slate-200"><?= $profile['organization'] ?></h4>
                        </div>
                        <p class="text-sm text-slate-400 mt-1.5 pl-3.5">
                            <?= $profile['position'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:col-span-7 flex flex-col space-y-8">
            <div class="space-y-3">
                <h3 class="font-semibold text-slate-500 text-xl">Keahlian Utama</h3>
                <div class="flex flex-wrap gap-2">
                    <?php foreach (array_map('trim', explode(',', $profile['skills'])) as $skill): ?>
                    <span
                        class="inline-flex items-center px-3 py-1.5 rounded-lg font-medium bg-slate-900 text-lime-200">
                        <?= $skill ?>
                    </span>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="space-y-3">
                <h3 class="font-semibold text-slate-500 text-xl">Hobi & Kegiatan</h3>
                <div class="flex flex-wrap gap-2">
                    <?php foreach (array_map('trim', explode(',', $profile['hobbies'])) as $hobby): ?>
                    <span
                        class="inline-flex items-center px-3 py-1.5 rounded-lg font-medium bg-slate-900 text-slate-300">
                        <?= $hobby ?>
                    </span>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="space-y-4">
                <h3 class="font-semibold text-slate-500 text-xl">Karya Game</h3>
                <div class="grid grid-cols-1 gap-4">
                    <?php 
                    $titles = array_map('trim', explode(',', $profile['games']['titles']));
                    $roles = array_map('trim', explode(',', $profile['games']['roles']));
                    ?>
                    <?php foreach ($titles as $index => $game): ?>
                    <div class="p-5 bg-slate-900 rounded-xl">
                        <div class="flex items-center space-x-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-lime-200"></span>
                            <h4 class="text-lg font-semibold text-slate-200"><?= $game ?></h4>
                        </div>

                        <?php if (isset($roles[$index]) && !empty($roles[$index])): ?>
                        <p class="text-sm text-slate-400 mt-1.5 pl-3.5">
                            <?= $roles[$index] ?>
                        </p>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>