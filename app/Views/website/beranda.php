<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="text-center">

    <img src="../img/logo.png" alt="logo" class="mx-auto mb-4 mt-8 w-[500px] h-[102px] t-[152px] l-[470px]">
</div>


<div class="container mx-auto">
    <div class="flex flex-col lg:flex-row justify-center align-content-enter">
        <div class="lg:w-[40%] my-auto text-center lg:px-1 px-6">
            <h2 class="text-[25px] font-bold text-black">Selamat Datang di website Maggotic</h2>
            <p class="text-[25px]  text-slate-700">Sebuah platform yang dirancang untuk tempat di mana
                kami menggabungkan
                keajaiban
                maggot dengan inovasi
                teknologi. Temukan berbagai informasi tentang penjualan maggot, teknologi terkini, dan solusi
                berkelanjutan.
            </p>
            <button
                class="bg-maggotic text-white text-1xl rounded-full px-9 py-3 mt-3 mb-6 transition duration-300 ease-in-out transform hover:bg-blue-600 focus:bg-blue-700 active:bg-blue-800 hover:scale-105 focus:scale-105 active:scale-95">
                Produk
            </button>

        </div>
        <div class="lg:w-[40%] flex justify-center px-6">
            <img src="/img/foto-maggot.png" alt="Foto Maggot" class="">
        </div>
    </div>
</div>


<<div class="container mt-24 mx-auto w-full lg:w-3/4 mb-24 px-4">
    <div class="flex justify-center items-center">
        <img src="/img/foto-produk-maggot.png" alt="Foto Produk Maggot" class="w-full">
    </div>
    <div class="flex justify-center items-center bg-[#2C2C2C]">
        <p class="text-center p-8 text-white">Maggotic merupakan sebuah aplikasi yang menjadi inovasi platform pemasaran
            maggot BSF berbasis syariah. Maggotic juga hadir dalam membantu pemerintah dan masyarakat untuk mendapatkan
            pendapatan tambahan melalui sampah organik, pengembangan model budidaya maggot BSF, dan meningkatkan
            penjualan hasil ternak melalui pakan maggot yang berkualitas, sehat, dan tidak mengandung patogen. Konsumen
            juga dapat memilih berbagai varian produk original dan hasil olahan maggot.</p>
    </div>
    </div>


    <?= $this->endsection('content'); ?>