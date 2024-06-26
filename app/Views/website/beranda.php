<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="flex justify-center align-center mt-20 mb-10">
    <h1 class=" text-maggotic font-bold text-3xl">MAGGOTIC</h1>
</div>


<div class="container mx-auto">
    <div class="flex justify-center align-content-enter">
        <div class="w-[40%] my-auto text-center">
            <h2 class="text-[25px] font-bold">Selamat Datang di website Maggotic</h2>
            <p class="text-[25px]">Sebuah platform yang dirancang untuk tempat di mana kami menggabungkan keajaiban
                maggot dengan inovasi
                teknologi. Temukan berbagai informasi tentang penjualan maggot, teknologi terkini, dan solusi
                berkelanjutan.
            </p>
            <button class=" bg-maggotic text-white rounded-full px-4 py-1 mt-3">Produk</button>
        </div>
        <div class="w-[40%]">
            <img src="/img/foto-maggot.png" alt="Foto Maggot" class="">
        </div>
    </div>
</div>


<div class="container mt-24 mx-auto w-3/4 mb-24">
    <div class="flex justify-center items-center">
        <img src="/img/foto-produk-maggot.png" alt="Foto Produk Maggot" class="w-[1168px]">
    </div>
    <div class="flex justify-center items-center bg-[#2C2C2C]">
        <p class="text-center p-8 text-white">Maggotic merupakan sebuah aplikasi yang menjadi inovasi platform
            pemasaran maggot
            BSF
            berbasis syariah.
            Maggotic juga hadir dalam membantu pemerintah dan masyarakat untuk mendapatkan pendapatan tambahan melalui
            sampah organik, pengembangan model budidaya maggot BSF, dan meningkatkan penjualan hasil ternak melalui
            pakan maggot yang berkualitas, sehat, dan tidak mengandung patogen. Konsumen juga dapat memilih berbagai
            varian produk original dan hasil olahan maggot.</p>
    </div>
</div>


<?= $this->endsection('content'); ?>