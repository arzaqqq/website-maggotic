<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div style="display: flex; justify-content: center; align-items: center; height: 200px;" class="p-10 my-20"  >
    <img src="<?= base_url('img/maggotic.png') ?>" alt="Logo" class="-mt-20 ">
</div>
<div class="-mt-24">
<h2 class="text-center text-black py-10 text-xl font-bold"> Produk Olahan Maggotic</h2>


<div class="container mx-auto flex flex-row px-10 space-x-10">

  <div class="card bg-hitam w-96 shadow-xl">
    <figure class="px-10 pt-10">
      <img
        src="<?= base_url('img/produk1.jpeg') ?>"
        alt="Got Meat"
        class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Goat Meat</h2>
      <p>
     
          Got Meat merupakan pioner cat food tinggi protein yang
          menggunakan subtitusi maggot sebagai sumber nutrisi
          ramah lingkungan dan bahan baku seat lainnya.</p>
      <div class="card-actions">
      <button class="btn bg-maggotic hover:bg-white hover:text-black text-white transform hover:duration-200 hover:scale-110">Buy Now</button>
      </div>
    </div>
  </div>

  <div class="card bg-hitam w-96 shadow-xl">
    <figure class="px-10 pt-10">
      <img
        src="<?= base_url('img/produk2.jpeg') ?>"
        alt="RS Maggot Red"
        class="rounded-xl w-full h-48" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">RS Maggot Red</h2>
      <p>
        RS Maggot Red Seekers produk dari Berritz merupakan
        pakan super premium untuk ikan hias, sangat cocok untuk
        treatmen/mencetak ikan kontes.</p>
      <div class="card-actions">
      <button class="btn bg-maggotic hover:bg-white hover:text-black text-white transform hover:duration-200 hover:scale-110">Buy Now</button>
      </div>
    </div>
  </div>

  <div class="card bg-hitam w-96 shadow-xl">
    <figure class="px-10 pt-10">
      <img
        src="<?= base_url('img/produk3.jpeg') ?> "
        alt="Tepung Maggot"
        class="rounded-xl w-full h-48" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Tepung Maggot</h2>
      <p>

            Tepung Maggot Rfam Jaya Larva Lalat Hitam Bsf Organik Pakan Burung Murai Kacer Ciblek Pentet Pleci</p>
      <div class="card-actions">
        <button class="btn bg-maggotic hover:bg-white hover:text-black text-white transform hover:duration-200 hover:scale-110">Buy Now</button>
      </div>
    </div>
  </div>

</div>

<h2 class="text-center mt-20 -mb-14 text-black py-10 text-xl font-bold"> Produk Original Maggotic</h2>

<div class="container mx-auto flex flex-row px-10 mb-20 mt-20 space-x-10">

  <div class="card bg-hitam w-96 shadow-xl">
    <figure class="px-10 pt-10">
      <img
        src="<?= base_url('img/produk4.jpeg') ?>"
        alt="Fresh Maggot"
        class="rounded-xl w-full h-48" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Fresh Maggot</h2>
      <p>
      Fresh Maggot langsung dari peternak sebagai alternatif pakan untuk ikan dan unggas. Larva BSF memeiliki kandungan protein yang tinggi sebesar 40-50%</p>
      <div class="card-actions">
      <button class="btn bg-maggotic hover:bg-white hover:text-black text-white transform hover:duration-200 hover:scale-110">Buy Now</button>
      </div>
    </div>
  </div>

  <div class="card bg-hitam w-96 shadow-xl">
    <figure class="px-10 pt-10">
      <img
        src="<?= base_url('img/produk5.jpeg') ?>"
        alt="Maggot Kering"
        class="rounded-xl w-full h-48" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Maggot Kering</h2>
      <p>

        Maggot kering merupakan pakan ayam boiler terbaik dan berkualitas</p>
      <div class="card-actions">
      <button class="btn bg-maggotic hover:bg-white hover:text-black text-white transform hover:duration-200 hover:scale-110">Buy Now</button>
      </div>
    </div>
  </div>

  <div class="card bg-hitam w-96 shadow-xl">
    <figure class="px-10 pt-10">
      <img
        src="<?= base_url('img/produk6.jpeg') ?>"
        alt="Puput Maggot"
        class="rounded-xl w-full h-48" />
    </figure>
    <div class="card-body items-center text-center">
      <h2 class="card-title">Pupuk Maggot</h2>
      <p>
      Pupuk Maggot merupakan hasil peternak maggot berupa pupuk yang memiliki kegunaan untuk menambah kesuburan tanaman khususnya holtikultura.</p>
      <div class="card-actions">
        <button class="btn bg-maggotic hover:bg-white hover:text-black text-white transform hover:duration-200 hover:scale-110">Buy Now</button>
      </div>
    </div>
  </div>

</div>
</div>

<div>
<div class="hero min-h-screen">
  <div class="hero-content flex-col lg:flex-row-reverse px-28">
    <div class="flex flex-col items-center">
      <img
        src="<?=base_url('img/produktestimoni.png')?>"
        class="max-w-sm rounded-lg mr-24" />
      <button class=" btn-test bg-maggotic ml-16 px-20 py-3  rounded-lg font-semibold text-white text-center hover:bg-gray-300 duration-200 hover:scale-110 hover:text-black">
        Lihat Testimoni
      </button>
    </div>
    <div class="ml-20">
      <h1 class="text-4xl text-center text-black font-bold">Mari Bergabung menjadi Member 
      Maggotic</h1>
    </div>
  </div>
</div>

<style>
.hero {
  display: flex;
  justify-content: center;
  align-items: center;
}

.hero-content {
  display: flex;
  flex-direction: column;
  align-items: center;
}

@media (min-width: 1024px) {
  .hero-content {
    flex-direction: row-reverse;
  }
}


</style>

</div>






<?= $this->endsection('content'); ?>