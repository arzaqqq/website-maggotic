<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Header dan Logo Testimoni Start-->
<div class="text-center">
    <!-- logo -->
    <img src="../img/logo.png" alt="logo" class="mx-auto mb-4 mt-8 w-[500px] h-[102px] t-[152px] l-[470px]">
    <!-- header -->
    <h4 class="font-bold text-2xl mb-2">Testimoni Pelanggan Maggotic</h4>
    <div class="w-24 h-1 bg-[#1E90FF] mx-auto mb-24"></div>
</div>
<!-- Header dan Logo Testimoni End -->

<!-- Card Testimoni Start -->
<div class="md:container md:mx-auto">

    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 px-8">
        <!-- Card 1 -->
        <div
            class="custom-card lg:w-11/12 md:w-3/4 h-auto bg-gray-300 flex flex-col md:flex-row items-center justify-center mx-auto rounded-md mb-20 p-4 md:p-0">
            <img src="../img/sinta.png" alt="Kak Sinta"
                class="w-72 h-72 object-cover mr-8 md:ml-0 md:mr-8 mb-4 md:mb-0">
            <!-- Konten di sebelah kanan -->
            <div class="flex flex-col justify-center text-center md:text-left">
                <h2 class="text-xl font-bold mb-4 md:mb-8">Testimoni Pelanggan</h2>
                <p class="text-2xl md:text-4xl font-bold mb-4 md:mb-8 text-[#1E90FF]">Kak Sinta</p>
                <p class="text-base md:text-lg leading-relaxed mb-4 ml-0 ">“Platform maggotic benar-benar
                    membantu saya dalam menemukan maggot berkualitas. Pelayanan juga ramah dan sangat praktis, jangan
                    lupa berlangganan ke maggotic, dan kurangi limbah makanan”</p>
            </div>
        </div>


        <!-- Card 2 -->
        <div
            class="custom-card lg:w-11/12 md:w-3/4 h-auto bg-gray-300 flex flex-col md:flex-row items-center justify-center mx-auto rounded-md mb-20 p-4 md:p-0">
            <img src="../img/kamal.png" alt="Bang Kamal"
                class="w-72 h-72 object-cover mr-8 md:ml-0 md:mr-8 mb-4 md:mb-0">
            <!-- Konten di sebelah kanan -->
            <div class="flex flex-col justify-center text-center md:text-left">
                <h2 class="text-xl font-bold mb-4 md:mb-8 ml-0 ">Testimoni Pelanggan Seorang Peternak Ayam
                    Boiler</h2>
                <p class="text-2xl md:text-4xl font-bold mb-4 md:mb-8 text-[#1E90FF]">Bang Kamal</p>
                <p class="text-base md:text-lg leading-relaxed mb-4 ml-0  ">“Salam sehat untuk semua! Saya,
                    Kamal, pemilik peternakan ayam boiler, ingin berbagi pengalaman positif saya dengan Maggotic.
                    Sebagai seorang peternak, saya selalu mencari pakan berkualitas untuk ayam-ayam saya. Dan inilah
                    mengapa saya memutuskan untuk mencoba maggot sebagai salah satu opsi pakan. Jangan ragu untuk
                    memakasi maggotic.”</p>
            </div>
        </div>

    </div>
</div>
<!-- Card Testimoni End  -->

<!-- Pagination -->
<div class="flex justify-center mt-4 mb-16
">
    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
        <a href="#"
            class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-blue-500 hover:bg-blue-50">Previous</a>
        <a href="#"
            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">1</a>
        <a href="#"
            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">2</a>
        <a href="#"
            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">3</a>
        <a href="#"
            class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-blue-500 hover:bg-blue-50">Next</a>
    </nav>
</div>
<!-- Pagination End -->


<?= $this->endsection('content'); ?>