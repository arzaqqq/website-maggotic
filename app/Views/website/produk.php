<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="text-center">
    <img src="../img/logo.png" alt="logo" class="mx-auto mb-4 mt-8 w-[500px] h-[102px] t-[152px] l-[470px]">
</div>

<div class="-mt-24">
    <h2 class="text-center text-black py-10 text-xl font-bold"> Produk Olahan Maggotic</h2>


    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 px-10">
        <div class="card bg-hitam w-full shadow-xl">
            <figure class="px-10 pt-10">
                <img src="<?= base_url('img/produk1.jpeg') ?>" alt="Got Meat"
                    class="rounded-xl w-full h-48 object-cover" />
            </figure>
            <div class="card-body items-center text-white text-center">
                <h2 class="card-title">Got Meat</h2>
                <p>Got Meat merupakan pioner cat food tinggi protein yang menggunakan subtitusi maggot sebagai sumber
                    nutrisi ramah lingkungan dan bahan baku seat lainnya.</p>
                <div class="card-actions">
                    <button
                        class="btnOlahan bg-maggotic hover:bg-white hover:text-black px-8 py-2 rounded-lg text-white transform hover:duration-200 hover:scale-110">Buy
                        Now</button>
                </div>
            </div>
        </div>

        <div class="card bg-hitam w-full shadow-xl">
            <figure class="px-10 pt-10">
                <img src="<?= base_url('img/produk2.jpeg') ?>" alt="RS Maggot Red"
                    class="rounded-xl w-full h-48 object-cover" />
            </figure>
            <div class="card-body items-center text-white text-center">
                <h2 class="card-title">RS Maggot Red</h2>
                <p>RS Maggot Red Seekers produk dari Berritz merupakan pakan super premium untuk ikan hias, sangat cocok
                    untuk treatmen/mencetak ikan kontes.</p>
                <div class="card-actions">
                    <button
                        class="btnOlahan bg-maggotic hover:bg-white hover:text-black px-8 py-2 rounded-lg text-white transform hover:duration-200 hover:scale-110">Buy
                        Now</button>
                </div>
            </div>
        </div>

        <div class="card bg-hitam w-full shadow-xl">
            <figure class="px-10 pt-10">
                <img src="<?= base_url('img/produk3.jpeg') ?>" alt="Tepung Maggot"
                    class="rounded-xl w-full h-48 object-cover" />
            </figure>
            <div class="card-body items-center text-white text-center">
                <h2 class="card-title">Tepung Maggot</h2>
                <p>Tepung Maggot Rfam Jaya Larva Lalat Hitam Bsf Organik Pakan Burung Murai Kacer Ciblek Pentet Pleci
                </p>
                <div class="card-actions">
                    <button
                        class="btnOlahan bg-maggotic hover:bg-white hover:text-black px-8 py-2 rounded-lg text-white transform hover:duration-200 hover:scale-110">Buy
                        Now</button>
                </div>
            </div>
        </div>
    </div>




    <h2 class="text-center mt-20 -mb-14 text-black py-10 text-xl font-bold"> Produk Original Maggotic</h2>

    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 px-10 mb-20 mt-20">
        <div class="card bg-hitam w-full shadow-xl">
            <figure class="px-10 pt-10">
                <img src="<?= base_url('img/produk4.jpeg') ?>" alt="Fresh Maggot"
                    class="rounded-xl w-full h-48 object-cover" />
            </figure>
            <div class="card-body items-center text-white text-center">
                <h2 class="card-title">Fresh Maggot</h2>
                <p>
                    Fresh Maggot langsung dari peternak sebagai alternatif pakan untuk ikan dan unggas. Larva BSF
                    memeiliki kandungan protein yang tinggi sebesar 40-50%
                </p>
                <div class="card-actions">
                    <button
                        class="btn bg-maggotic hover:bg-white hover:text-black text-white transform hover:duration-200 hover:scale-110"
                        onclick="openModal2('Fresh Maggot')">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="card bg-hitam w-full shadow-xl">
            <figure class="px-10 pt-10">
                <img src="<?= base_url('img/produk5.jpeg') ?>" alt="Maggot Kering"
                    class="rounded-xl w-full h-48 object-cover" />
            </figure>
            <div class="card-body items-center text-white text-center">
                <h2 class="card-title">Maggot Kering</h2>
                <p>
                    Maggot kering merupakan pakan ayam boiler terbaik dan berkualitas
                </p>
                <div class="card-actions">
                    <button
                        class="btn bg-maggotic hover:bg-white hover:text-black text-white transform hover:duration-200 hover:scale-110"
                        onclick="openModal2('Maggot Kering')">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="card bg-hitam w-full shadow-xl">
            <figure class="px-10 pt-10">
                <img src="<?= base_url('img/produk6.jpeg') ?>" alt="Pupuk Maggot"
                    class="rounded-xl w-full h-48 object-cover" />
            </figure>
            <div class="card-body items-center text-white text-center">
                <h2 class="card-title">Pupuk Maggot</h2>
                <p>
                    Pupuk Maggot merupakan hasil peternak maggot berupa pupuk yang memiliki kegunaan untuk menambah
                    kesuburan tanaman khususnya holtikultura.
                </p>
                <div class="card-actions">
                    <button
                        class="btn bg-maggotic hover:bg-white hover:text-black text-white transform hover:duration-200 hover:scale-110"
                        onclick="openModal2('Pupuk Maggot')">Buy Now</button>
                </div>
            </div>
        </div>
    </div>

</div>

<div>
    <div class="hero min-h-screen flex items-center justify-center">
        <div class="hero-content flex-col lg:flex-row-reverse max-w-6xl mx-auto">
            <div class="flex flex-col items-center lg:items-start">
                <img src="<?= base_url('img/produktestimoni.png') ?>" class="max-w-sm rounded-lg mb-6 lg:mr-24" />
                <a href="<?= base_url('testimoni') ?>"
                    class="btn-test bg-maggotic ml-16 lg:ml-0 px-20 py-3 rounded-lg font-semibold text-white text-center hover:bg-gray-300 duration-200 hover:scale-110 hover:text-black">
                    Lihat Testimoni
                </a>
            </div>
            <div class="ml-6 lg:ml-20">
                <h1 class="text-4xl text-center lg:text-left text-black font-bold">Mari Bergabung menjadi Member
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
            <form id="orderForm" class="mt-4 relative">
                <span class="close absolute top-0 right-0 mr-0 -mt-4 cursor-pointer" onclick="closeModal()">
                    <svg class="w-6 h-6 text-gray-600 hover:text-gray-800" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </span>
                <label for="productName" class="block">Nama Produk Olahan</label>
                <select name="productName" id="productName"
                    class="border rounded-lg px-3 py-2 mt-1 w-full bg-white text-black">
                    <option value="Got Meat">Got Meat</option>
                    <option value="RS Maggot Red">RS Maggot Red</option>
                    <option value="Tepung Maggot">Tepung Maggot</option>
                </select>
                <label for="quantity" class="block mt-4">Jumlah :</label>
                <input type="number" id="quantity" name="quantity"
                    class="border rounded-lg px-3 py-2 mt-1 w-full bg-white text-black" required>
                <div id="totalPrice" class="mt-2 text-black font-bold"></div>
                <div id="stockMessage" class="mt-2 text-black font-bold"></div>
                <button type="button" onclick="saveOrder()"
                    class="bg-gray-300 mt-4 px-4 py-2 rounded-lg font-semibold text-black hover:bg-maggotic duration-200 hover:scale-110 hover:text-white w-full">Pesan</button>
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
            <form id="orderForm2" class="mt-4 relative">
                <span class="close absolute top-0 right-0 mr-0 -mt-4 cursor-pointer" onclick="closeModal2()">
                    <svg class="w-6 h-6 text-gray-600 hover:text-gray-800" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </span>

                <!-- Form Produk Olahan -->
               
                    <label for="productName2" class="block">Nama Produk Olahan</label>
                    <select name="productName" id="productName2"
                        class="border rounded-lg px-3 py-2 mt-1 w-full bg-white text-black">
                        <option value="Fresh Maggot">Fresh Maggot</option>
                        <option value="Maggot Kering">Maggot Kering</option>
                        <option value="Pupuk Maggot">Pupuk Maggot</option>
                    </select>
                    <label for="quantity2" class="block mt-4">Jumlah :</label>
                    <input type="number" id="quantity2" name="quantity"
                        class="border rounded-lg px-3 py-2 mt-1 w-full bg-white text-black" required>
                    <div id="totalPrice2" class="mt-2 text-black font-bold"></div>
                    <div id="modalStockMessage" class="mt-2 text-black font-bold"></div>
                    <button type="button" onclick="saveOrder2()"
                        class="bg-gray-300 mt-4 px-4 py-2 rounded-lg font-semibold text-black hover:bg-maggotic duration-200 hover:scale-110 hover:text-white w-full">Pesan</button>
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
    var stockMessage = document.getElementById('stockMessage');

    var stockData ={
        "Got Meat": 120,
        "RS Maggot Red": 0,
        "Tepung Maggot": 100
        
    }

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

    function updateStockMessage() {
        var selectedProduct = productName.value;
        var stock = stockData[selectedProduct];
        if (stock > 0) {
            stockMessage.textContent = 'Stock Tersedia: ' + stock;
        } else {
            stockMessage.textContent = 'Pupuk Maggot tidak tersedia';
        }
    }

    productName.addEventListener('change', updateStockMessage);

    window.saveOrder = function() {
        var selectedProduct = productName.value;
        var quantityValue = parseInt(quantity.value);
        var stock = stockData[selectedProduct];

        if (quantityValue <= stock) {
            stockData[selectedProduct] -= quantityValue;
            var totalPrice = calculateTotalPrice(selectedProduct, quantityValue);

            var message = 'Halo, saya ingin memesan ' + quantityValue + ' ' + selectedProduct +
                '. Total harga: Rp' + totalPrice;
            window.open('https://wa.me/+6281391546240?text=' + encodeURIComponent(message), '_blank');

            updateStockMessage();
        } else {
            alert('Jumlah pesanan melebihi stok yang tersedia.');
        }
    };

    function calculateTotalPrice(productName, quantity) {
        var price = 0;
        if (productName === "Got Meat") {
            price = 79000;
        } else if (productName === "RS Maggot Red") {
            price = 50000;
        } else if (productName === "Tepung Maggot") {
            price = 10000;
        }
        return price * quantity;
    }
});

//JS2
document.addEventListener("DOMContentLoaded", function() {
    var modal2 = document.getElementById('myModal2');
    var productName2 = document.getElementById('productName2');
    var quantity2 = document.getElementById('quantity2');
    var modalStockMessage = document.getElementById('modalStockMessage');

    var stockData = {
        "Fresh Maggot": 122,
        "Maggot Kering": 0,
        "Pupuk Maggot": 102
    };

    function openModal2(selectedProduct) {
        productName2.value = selectedProduct;
        modal2.classList.remove("hidden");
        updateModalStockMessage2();
    }

    function closeModal2() {
        modal2.classList.add("hidden");
    }

    function updateModalStockMessage2() {
        var selectedProduct = productName2.value;
        var stock = stockData[selectedProduct];
        if (stock > 0) {
            modalStockMessage.textContent = 'Stock Tersedia: ' + stock;
        } else {
            modalStockMessage.textContent = 'Pupuk Maggot tidak tersedia';
        }
    }

    productName2.addEventListener('change', updateModalStockMessage2);

    window.saveOrder2 = function() {
        var selectedProduct = productName2.value;
        var quantityValue = parseInt(quantity2.value);
        var stock = stockData[selectedProduct];

        if (quantityValue <= stock) {
            stockData[selectedProduct] -= quantityValue;
            var totalPrice = calculateTotalPrice2(selectedProduct, quantityValue);

            var message = 'Halo, saya ingin memesan ' + quantityValue + ' ' + selectedProduct +
                '. Total harga: Rp' + totalPrice;
            window.open('https://wa.me/+6281391546240?text=' + encodeURIComponent(message), '_blank');

            updateModalStockMessage2();
        } else {
            alert('Jumlah pesanan melebihi stok yang tersedia.');
        }
    };

    function calculateTotalPrice2(productName, quantity) {
        var price = 0;
        if (productName === "Fresh Maggot") {
            price = 10000;
        } else if (productName === "Maggot Kering") {
            price = 20000;
        } else if (productName === "Pupuk Maggot") {
            price = 30000;
        }
        return price * quantity;
    }

    window.openModal2 = openModal2;
    window.closeModal2 = closeModal2;
});

</script>




<?= $this->endsection('content'); ?>