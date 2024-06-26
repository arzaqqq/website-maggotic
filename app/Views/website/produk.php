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
      <img src="<?= base_url('img/produk1.jpeg') ?>" alt="Got Meat" class="rounded-xl" />
    </figure>
    <div class="card-body items-center text-white text-center">
      <h2 class="card-title">Got Meat</h2>
      <p>Got Meat merupakan pioner cat food tinggi protein yang menggunakan subtitusi maggot sebagai sumber nutrisi ramah lingkungan dan bahan baku seat lainnya.</p>
      <div class="card-actions">
        <button class="btnOlahan bg-maggotic hover:bg-white hover:text-black px-8 py-2 rounded-lg text-white transform hover:duration-200 hover:scale-110">Buy Now</button>
      </div>
    </div>
  </div>

  <div class="card bg-hitam w-96 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="<?= base_url('img/produk2.jpeg') ?>" alt="RS Maggot Red" class="rounded-xl w-full h-48" />
    </figure>
    <div class="card-body items-center text-white  text-center">
      <h2 class="card-title">RS Maggot Red</h2>
      <p>RS Maggot Red Seekers produk dari Berritz merupakan pakan super premium untuk ikan hias, sangat cocok untuk treatmen/mencetak ikan kontes.</p>
      <div class="card-actions">
        <button class="btnOlahan bg-maggotic hover:bg-white hover:text-black px-8 py-2 rounded-lg text-white transform hover:duration-200 hover:scale-110">Buy Now</button>
      </div>
    </div>
  </div>

  <div class="card bg-hitam w-96 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="<?= base_url('img/produk3.jpeg') ?>" alt="Tepung Maggot" class="rounded-xl w-full h-48" />
    </figure>
    <div class="card-body items-center text-white  text-center">
      <h2 class="card-title">Tepung Maggot</h2>
      <p>Tepung Maggot Rfam Jaya Larva Lalat Hitam Bsf Organik Pakan Burung Murai Kacer Ciblek Pentet Pleci</p>
      <div class="card-actions">
        <button class="btnOlahan bg-maggotic hover:bg-white hover:text-black px-8 py-2 rounded-lg text-white transform hover:duration-200 hover:scale-110">Buy Now</button>
      </div>
    </div>
  </div>
</div>

<h2 class="text-center mt-20 -mb-14 text-black py-10 text-xl font-bold"> Produk Original Maggotic</h2>

<div class="container mx-auto flex flex-row px-10 mb-20 mt-20 space-x-10">
  <div class="card bg-hitam w-96 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="<?= base_url('img/produk4.jpeg') ?>" alt="Fresh Maggot" class="rounded-xl w-full h-48" />
    </figure>
    <div class="card-body items-center text-white  text-center">
      <h2 class="card-title">Fresh Maggot</h2>
      <p>
        Fresh Maggot langsung dari peternak sebagai alternatif pakan untuk ikan dan unggas. Larva BSF memeiliki kandungan protein yang tinggi sebesar 40-50%
      </p>
      <div class="card-actions">
        <button class="btn bg-maggotic hover:bg-white hover:text-black text-white transform hover:duration-200 hover:scale-110" onclick="openModal2('Fresh Maggot')">Buy Now</button>
      </div>
    </div>
  </div>

  <div class="card bg-hitam w-96 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="<?= base_url('img/produk5.jpeg') ?>" alt="Maggot Kering" class="rounded-xl w-full h-48" />
    </figure>
    <div class="card-body items-center text-white  text-center">
      <h2 class="card-title">Maggot Kering</h2>
      <p>
        Maggot kering merupakan pakan ayam boiler terbaik dan berkualitas
      </p>
      <div class="card-actions">
        <button class="btn bg-maggotic hover:bg-white hover:text-black text-white transform hover:duration-200 hover:scale-110" onclick="openModal2('Maggot Kering')">Buy Now</button>
      </div>
    </div>
  </div>

  <div class="card bg-hitam w-96 shadow-xl">
    <figure class="px-10 pt-10">
      <img src="<?= base_url('img/produk6.jpeg') ?>" alt="Puput Maggot" class="rounded-xl w-full h-48" />
    </figure>
    <div class="card-body items-center text-white  text-center">
      <h2 class="card-title">Pupuk Maggot</h2>
      <p>
        Pupuk Maggot merupakan hasil peternak maggot berupa pupuk yang memiliki kegunaan untuk menambah kesuburan tanaman khususnya holtikultura.
      </p>
      <div class="card-actions">
        <button class="btn bg-maggotic hover:bg-white hover:text-black text-white transform hover:duration-200 hover:scale-110" onclick="openModal2('Pupuk Maggot')">Buy Now</button>
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


<!--Modal-->

<div class="container mx-auto flex flex-row px-10 space-x-10">
  <!-- ... produk cards ... -->

  <!-- Modal -->
  <div id="myModal" class="fixed inset-0 z-10 hidden overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen">
      <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <span class="close absolute top-0 right-0 mr-4 mt-4 cursor-pointer" onclick="closeModal()">
          <svg class="w-6 h-6 text-gray-600 hover:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </span>

        <!-- Form Produk Olahan -->
        <form id="orderForm" class="mt-4">
          <label for="productName" class="block">Nama Produk Olahan</label>
          <select name="productName" id="productName" class="border rounded-lg px-3 py-2 mt-1 w-full bg-white text-black">
            <option value="Got Meat">Got Meat</option>
            <option value="RS Maggot Red">RS Maggot Red</option>
            <option value="Tepung Maggot">Tepung Maggot</option>
          </select>
          <label for="quantity" class="block mt-4">Jumlah :</label>
          <input type="number" id="quantity" name="quantity" class="border rounded-lg px-3 py-2 mt-1 w-full bg-white text-black" required>
          <div id="totalPrice" class="mt-2 text-black font-bold"></div>
          <button type="button" onclick="saveOrder()" class="bg-gray-300 mt-4 px-4 py-2 rounded-lg font-semibold text-black hover:bg-maggotic duration-200 hover:scale-110 hover:text-white w-full">Pesan</button>
        </form>
      </div>
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

<!--Modal 2-->
<div id="myModal2" class="fixed inset-0 z-10 hidden overflow-y-auto">
  <div class="flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
      <span class="close absolute top-0 right-0 mr-4 mt-4 cursor-pointer" onclick="closeModal2()">
        <svg class="w-6 h-6 text-gray-600 hover:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </span>

      <!-- Form Produk Olahan -->
      <form id="orderForm2" class="mt-4">
        <label for="productName2" class="block">Nama Produk Olahan</label>
        <select name="productName" id="productName2" class="border rounded-lg px-3 py-2 mt-1 w-full bg-white text-black">
          <option value="Fresh Maggot">Fresh Maggot</option>
          <option value="Maggot Kering">Maggot Kering</option>
          <option value="Pupuk Maggot">Pupuk Maggot</option>
        </select>
        <label for="quantity2" class="block mt-4">Jumlah :</label>
        <input type="number" id="quantity2" name="quantity" class="border rounded-lg px-3 py-2 mt-1 w-full bg-white text-black" required>
        <div id="totalPrice2" class="mt-2 text-black font-bold"></div>
        <button type="button" onclick="saveOrder2()" class="bg-gray-300 mt-4 px-4 py-2 rounded-lg font-semibold text-black hover:bg-maggotic duration-200 hover:scale-110 hover:text-white w-full">Pesan</button>
      </form>
    </div>
  </div>
</div>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
  var modal = document.getElementById('myModal');
  var btns = document.querySelectorAll('.btnOlahan');
  var span = document.getElementsByClassName('close')[0];
  var productName = document.getElementById('productName');
  var quantity = document.getElementById('quantity');
  var totalPriceElement = document.getElementById('totalPrice');

  btns.forEach(function(btn) {
    btn.onclick = function() {
      modal.classList.remove("hidden");
    }
  });

  span.onclick = function() {
    modal.classList.add("hidden");
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.classList.add("hidden");
    }
  }

  function closeModal() {
    modal.classList.add("hidden");
  }

  function updateTotalPrice() {
    var price = 0;
    var quantityValue = quantity.value;

    if (productName.value === "Got Meat") {
      price = 79000; 
    } else if (productName.value === "RS Maggot Red") {
      price = 50000; 
    } else if (productName.value === "Tepung Maggot") {
      price = 10000;
    }

    var totalPrice = price * quantityValue;
    totalPriceElement.textContent = 'Total Harga: Rp.' + totalPrice;
  }

  quantity.addEventListener('input', updateTotalPrice);
  productName.addEventListener('change', updateTotalPrice);

  window.saveOrder = function() {
    var productNameValue = productName.value;
    var quantityValue = quantity.value;
    var price = 0;

    if (productNameValue === "Got Meat") {
      price = 79000; 
    } else if (productNameValue === "RS Maggot Red") {
      price = 50000; 
    } else if (productNameValue === "Tepung Maggot") {
      price = 10000;
    }

    var totalPrice = price * quantityValue;

    console.log('Product Name:', productNameValue);
    console.log('Quantity:', quantityValue);
    console.log('Total Price:', totalPrice);

    localStorage.setItem('productName', productNameValue);
    localStorage.setItem('quantity', quantityValue);
    localStorage.setItem('totalPrice', totalPrice);
    
    var message = 'Halo, saya ingin memesan ' + quantityValue + ' ' + productNameValue + '. Total harga: Rp.' + totalPrice;
    window.open('https://wa.me/+6281391546240?text=' + encodeURIComponent(message), '_blank');
    
    closeModal();
  }
});

//JS2
document.addEventListener("DOMContentLoaded", function() {
  var modal2 = document.getElementById('myModal2');
  var productName2 = document.getElementById('productName2');
  var quantity2 = document.getElementById('quantity2');
  var totalPriceElement2 = document.getElementById('totalPrice2');

  function openModal2(selectedProduct) {
    productName2.value = selectedProduct;
    modal2.classList.remove("hidden");
    updateTotalPrice2();
  }

  function closeModal2() {
    modal2.classList.add("hidden");
  }

  function updateTotalPrice2() {
    var price = 0;
    var quantityValue = quantity2.value;

    if (productName2.value === "Fresh Maggot") {
      price = 3000000; 
    } else if (productName2.value === "Maggot Kering") {
      price = 120000; 
    } else if (productName2.value === "Pupuk Maggot") {
      price = 10000;
    }

    var totalPrice = price * quantityValue;
    totalPriceElement2.textContent = 'Total Harga: Rp' + totalPrice.toLocaleString('id-ID');
  }

  quantity2.addEventListener('input', updateTotalPrice2);
  productName2.addEventListener('change', updateTotalPrice2);

  window.saveOrder2 = function() {
    var productNameValue = productName2.value;
    var quantityValue = quantity2.value;
    var price = 0;

    if (productNameValue === "Fresh Maggot") {
      price = 3000000; 
    } else if (productNameValue === "Maggot Kering") {
      price = 120000; 
    } else if (productNameValue === "Pupuk Maggot") {
      price = 10000;
    }

    var totalPrice = price * quantityValue;

    console.log('Product Name:', productNameValue);
    console.log('Quantity:', quantityValue);
    console.log('Total Price:', totalPrice);

    localStorage.setItem('productName2', productNameValue);
    localStorage.setItem('quantity2', quantityValue);
    localStorage.setItem('totalPrice2', totalPrice);
    
    var message = 'Halo, saya ingin memesan ' + quantityValue + ' ' + productNameValue + '. Total harga: Rp' + totalPrice.toLocaleString('id-ID');
    window.open('https://wa.me/+6281391546240?text=' + encodeURIComponent(message), '_blank');
    
    closeModal2();
  }

  window.openModal2 = openModal2;
  window.closeModal2 = closeModal2;
});


    
</script>




<?= $this->endsection('content'); ?>