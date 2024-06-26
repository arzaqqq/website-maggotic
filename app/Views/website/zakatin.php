<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Header dan Logo Testimoni Start-->
<div class="text-center">
    <!-- logo -->
    <img src="../img/logo.png" alt="logo" class="mx-auto mb-4 mt-8 w-[500px] h-[102px] t-[152px] l-[470px]">
    <!-- header -->
    <h4 class="font-bold text-2xl mb-2">Ayo Berzakat</h4>
    <div class="w-24 h-1 bg-[#1E90FF] mx-auto mb-24"></div>
</div>
<!-- Header dan Logo Testimoni End -->

<!-- Card Zakat Start-->
<div class="container mx-auto px-8 flex flex-wrap justify-between">
    <!-- Card 1 -->
    <div class="card lg:card-side bg-base-100 shadow-sm w-2/4 mb-20">
        <img class="w-80 h-72" src="../img/zakat1.png" alt="Album" />
        <div class="card-body flex flex-col justify-between px-5 py-4">
            <h2 class="card-title font-bold text-lg justify-center">Penyandang Disabilitas</h2>
            <p class="text-base text-center">Mari berzakat untuk saudara-saudara penyandang disabilitas. Setiap bantuan kita berarti bagi mereka.</p>
            <p class="text-base mt-4 text-center">Lokasi : Padang, Kota tua</p>
            <div class="card-actions justify-center">
                <a href="https://kitabisa.com/campaign/pangankeanakpelosok?utm_source=socialsharing_donor_web_null&utm_medium=share_campaign_copas&utm_campaign=share_detail_campaign" target="_blank" class="btn bg-[#1E90FF] hover:bg-blue-700 active:bg-blue-400 rounded-full text-white">Donasi</a>
            </div>
        </div>
    </div>
    <!-- Card 1 End -->

    <!-- Card 2 -->
    <div class="card lg:card-side bg-base-100 shadow-sm w-2/4 mb-20">
        <img class="w-80 h-72" src="../img/zakat2.png" alt="Album" />
        <div class="card-body flex flex-col justify-between px-5 py-4">
            <h2 class="card-title font-bold text-lg justify-center">Panti Asuhan</h2>
            <p class="text-base text-center">Mari berbagi kebahagiaan dengan anak-anak di panti asuhan. Setiap donasi kita memberikan harapan dan cinta bagi mereka.</p>
            <p class="text-base mt-4 text-center">Lokasi : Bukit Tinggi</p>
            <div class="card-actions justify-center">
                <button class="btn bg-[#1E90FF] hover:bg-blue-700 active:bg-blue-400 rounded-full text-white">Donasi</button>
            </div>
        </div>
    </div>
    <!-- Card 2 End -->

    <!-- Card 3 -->
    <div class="card lg:card-side bg-base-100 shadow-sm w-2/4 mb-20">
        <img class="w-80 h-72" src="../img/zakat3.png" alt="Album" />
        <div class="card-body flex flex-col justify-between px-5 py-4">
            <h2 class="card-title font-bold text-lg justify-center">Kebakaran Pasar</h2>
            <p class="text-base text-center">Mari berdonasi untuk saudara-saudara yang mendapat musibah kebakaran.</p>
            <p class="text-base mt-4 text-center">Lokasi : Pasar Kota</p>
            <div class="card-actions justify-center">
                <button class="btn bg-[#1E90FF] hover:bg-blue-700 active:bg-blue-400 rounded-full text-white">Donasi</button>
            </div>
        </div>
    </div>
    <!-- Card 3 End -->

    <!-- Card 4  -->
    <div class="card lg:card-side bg-base-100 shadow-sm w-2/4 mb-20">
        <img class="w-80 h-72" src="../img/zakat4.png" alt="Album" />
        <div class="card-body flex flex-col justify-between px-5 py-4">
            <h2 class="card-title font-bold text-lg justify-center">Gempa</h2>
            <p class="text-base text-center">Mari berbagi sedikit rezeki kepada korban gempa.</p>
            <p class="text-base mt-4 text-center">Lokasi : Padang</p>
            <div class="card-actions justify-center">
                <button class="btn bg-[#1E90FF] hover:bg-blue-700 active:bg-blue-400 rounded-full text-white">Donasi</button>
            </div>
        </div>
    </div>
    <!-- Card 4 End -->

    <!-- Card 5 -->
    <div class="card lg:card-side bg-base-100 shadow-sm w-2/4 mb-20">
        <img class="w-80 h-72" src="../img/zakat5.png" alt="Album" />
        <div class="card-body flex flex-col justify-between px-5 py-4">
            <h2 class="card-title font-bold text-lg justify-center">Anak Yatim</h2>
            <p class="text-base text-center">Berbagi rezeki untuk anak yatim dipanti asuhan ceria.</p>
            <p class="text-base mt-4 text-center">Lokasi : Payukumbuh</p>
            <div class="card-actions justify-center">
                <button class="btn bg-[#1E90FF] hover:bg-blue-700 active:bg-blue-400 rounded-full text-white">Donasi</button>
            </div>
        </div>
    </div>
    <!-- Card 5 End -->

    <!-- Card 6 -->
    <div class="card lg:card-side bg-base-100 shadow-sm w-2/4 mb-20">
        <img class="w-80 h-72" src="../img/zakat6.png" alt="Album" />
        <div class="card-body flex flex-col justify-between px-5 py-4">
            <h2 class="card-title font-bold text-lg justify-center">Kaum Dhuafa</h2>
            <p class="text-base text-center">Mari berbagi sedikit rezeki kepada kaum dhuafa..</p>
            <p class="text-base mt-4 text-center">Lokasi : Solok</p>
            <div class="card-actions justify-center">
                <button class="btn bg-[#1E90FF] hover:bg-blue-700 active:bg-blue-400 rounded-full text-white">Donasi</button>
            </div>
        </div>
    </div>
    <!-- Card 6 End  -->
</div>
<!-- Card Zakat End -->

<!-- Pagination -->
<div class="flex justify-center mt-4 mb-16
">
    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-blue-500 hover:bg-blue-50">Previous</a>
        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">1</a>
        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">2</a>
        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">3</a>
        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-blue-500 hover:bg-blue-50">Next</a>
    </nav>
</div>
<!-- Pagination End -->

<?= $this->endsection('content'); ?>