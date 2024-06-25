<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="flex flex-col items-center mt-20 mb-10">
    <h1 class="text-maggotic font-bold text-3xl mb-4">MAGGOTIC</h1>
    <p class="text-center mx-16 text-[24px]">Di sini, Anda dapat menemukan lokasi pengepul sampah yang khusus
        mengumpulkan makanan
        manggot. Jelajahi peta dan
        temukan daerah-daerah di mana Anda dapat berkontribusi dalam menjaga lingkungan dengan mendaur ulang sisa
        makanan menjadi pakan manggot.</p>
</div>

<div class="flex justify-center">
    <button class="inline-flex items-center p-4 border-2 border-blue-600 px-16">
        Sumatera Barat
        <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/228BE6/sort-down.png" alt="sort-down"
            class="ml-2" />
    </button>
</div>




<?= $this->endSection('content'); ?>