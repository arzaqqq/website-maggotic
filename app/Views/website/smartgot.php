<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="flex justify-center mt-10 font-bold text-3xl text-black">
    <h1>Berita Maggot</h1>
</div>

<div class="container mx-auto mt-8 mb-24 px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="card w-full h-[542px] shadow-lg">
            <figure>
                <img src="/img/foto-manfaat-maggot.png" alt="Manfaat Maggot" class="w-full object-cover" />
            </figure>
            <div class="card-body text-black px-4 py-5">
                <h2 class="card-title font-bold text-lg">Manfaat Maggot</h2>
                <p class="text-base">Maggot memiliki sejuta manfaat yang menarik dan bermanfaat, terutama dalam konteks
                    lingkungan.</p>
                <div class="card-actions flex justify-end mt-4">
                    <button class="px-4 py-2 rounded-full border-2 border-stone-950">Selengkapnya</button>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card  w-full h-[542px] shadow-lg">
            <figure>
                <img src="/img/masalah-sampah.png" alt="Manfaat Maggot" class="w-full object-cover" />
            </figure>
            <div class="card-body text-black px-4 py-5">
                <h2 class="card-title font-bold text-lg">Masalah sampah?</h2>
                <p class="text-base">Sampah di Indonesia masih menjadi masalah yang belum terselesaikan dengan baik.
                    Budidaya maggot...</p>
                <div class="card-actions flex justify-end mt-4">
                    <button class="px-4 py-2 rounded-full border-2 border-stone-950">Selengkapnya</button>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="card  w-full h-[542px] shadow-lg">
            <figure>
                <img src="/img/foto-pakan-ayam.png" alt="Manfaat Maggot" class="w-full object-cover" />
            </figure>
            <div class="card-body text-black px-4 py-5">
                <h2 class="card-title font-bold text-lg">Maggot sebagai pakan ayam?</h2>
                <p class="text-base">Maggot dapat menjadi pakan ternak yang bergizi tinggi.....</p>
                <div class="card-actions flex justify-end mt-4">
                    <button class="px-4 py-2 rounded-full border-2 border-stone-950">Selengkapnya</button>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="card  w-full h-[542px] shadow-lg">
            <figure>
                <img src="/img/foto-maggot-hebat.png" alt="Manfaat Maggot" class="w-full object-cover" />
            </figure>
            <div class="card-body text-black px-4 py-5">
                <h2 class="card-title font-bold text-lg">Maggot sebagai pakan?</h2>
                <p class="text-base">Maggot merubah hidup santoso, ia mengolah maggot menjadi...</p>
                <div class="card-actions flex justify-end mt-4">
                    <button class="px-4 py-2 rounded-full border-2 border-stone-950">Selengkapnya</button>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="card  w-full h-[542px] shadow-lg">
            <figure>
                <img src="/img/foto-budidaya-maggot.png" alt="Manfaat Maggot" class="w-full object-cover" />
            </figure>
            <div class="card-body text-black px-4 py-5">
                <h2 class="card-title font-bold text-lg">Cara budidaya maggot</h2>
                <p class="text-base">Budidaya maggot sangatlah mudah, cukup sediakan......</p>
                <div class="card-actions flex justify-end mt-4">
                    <button class="px-4 py-2 rounded-full border-2 border-stone-950">Selengkapnya</button>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="card  w-full h-[542px] shadow-lg">
            <figure>
                <img src="/img/foto-makanan-basi.png" alt="Manfaat Maggot" class="w-full object-cover" />
            </figure>
            <div class="card-body text-black px-4 py-5">
                <h2 class="card-title font-bold text-lg">Punya makanan basi?</h2>
                <p class="text-base">Jangan dibuang sembarangan, berikan makanan basi anda pada maggot maka akan....</p>
                <div class="card-actions flex justify-end mt-4">
                    <button class="px-4 py-2 rounded-full border-2 border-stone-950">Selengkapnya</button>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection('content'); ?>