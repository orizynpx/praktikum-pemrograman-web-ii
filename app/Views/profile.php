<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Profil
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1 class="text-xl font-medium">Profil</h1>

<div class="max-w-md flex items-center">
    <div
        class="max-w-md w-full bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden transform transition-all duration-300 hover:shadow-md">
        <div
            class="flex flex-col items-center pt-8 pb-6 px-6 border-b border-slate-50 bg-gradient-to-b from-slate-50/50 to-white">
            <div class="relative">
                <img class="w-24 h-24 rounded-full border-4 border-white shadow-sm object-cover"
                    src="<?= $profile['picture'] ?>" alt="Profile Picture">
            </div>
            <h1 class="mt-4 text-xl font-bold text-slate-950 text-center tracking-tight"><?= $profile['name'] ?>
            </h1>
            <p class="text-sm font-medium text-indigo-600 mt-1"><?= $profile['department'] ?></p>
            <span
                class="mt-2 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-600 border border-slate-200/60">
                <?= $profile['id'] ?>
            </span>
        </div>

        <div class="p-6 space-y-5">
            <div>
                <h2 class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Skills</h2>
                <div class="flex flex-wrap gap-1.5">
                    <span
                        class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-indigo-50 text-indigo-700 border border-indigo-100">
                        <?= $profile['skills'] ?>
                    </span>
                </div>
            </div>

            <div>
                <h2 class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Hobbies</h2>
                <div class="flex flex-wrap gap-1.5">
                    <span
                        class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-slate-100 text-slate-700 border border-slate-200/40">
                        <?= $profile['hobbies'] ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>