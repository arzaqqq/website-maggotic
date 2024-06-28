<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<div style="display: flex; justify-content: center; align-items: center; height: 200px;" class="p-10 my-20 "  >
    <img src="<?= base_url('img/maggotic.png') ?>" alt="Logo" class="-mt-32 ">
</div>

<div class="items-center px-4 sm:px-8 md:px-16 py-4 -mt-32 mb-20">
    <div class="bg-maggotic mx-auto py-10 sm:py-40 md:py-60 lg:py-36 px-10 sm:px-20 md:px-40 lg:px-60 rounded-lg">
        <div class="flex flex-col mt-20 md:flex-row gap-8">
            
            <div class="container mx-auto -mt-20 md:-mt-40 md:-ml-16 lg:-ml-32 px-4 py-8">
                <div class="bg-white shadow-lg rounded-lg px-4 py-8 sm:px-8 sm:py-16 md:px-8 md:py-20">
                    <img src="<?= base_url('img/maggotech1.jpeg') ?>" alt="Maggotech" class="-mt-10 shadow-md border mx-auto">
                    <p id="short-text" class="text-center text-black mt-4 sm:mt-6 md:mt-10">
                            Garvabin merupakan budidaya maggot bsf berteknologi modern dan terintegrasi artificial inteligence yang dapat anda gunakan untuk mendapatkan pendapatan secara skala yang besar. menawarkan solusi smart organic waste management dengan memanfaatkan metode biokonversi oleh larva Black soldier fly (BSF).
                            <span id="dots"></span>
                            <span id="more" class="hidden">
                                Larva ini dapat mengkonversi sampah organik menjadi 2 produk bernilai tinggi yaitu larva sebagai pakan ternak dan pupuk organik untuk tanaman.Cara kerja IMAGGO adalah dengan memasukkan sampah organik ke dalam IMAGGO sehingga nantinya akan direduksi oleh larva BSF yang ada didalamnya.
                            </span>
                        </p>
                        <button onclick="toggleText()" id="read-more-btn" class="text-blue-500 underline text-center mx-auto block mt-4">Baca selengkapnya</button>


                        
                        <button class=" buttonPrice bg-gray-300 mt-5 px-20 py-3 rounded-lg font-semibold text-black text-center mx-auto hover:bg-maggotic duration-200 hover:scale-110 hover:text-white flex items-center justify-between w-full" data-product="Garvabin">
                            <div class="flex flex-col items-center w-full">
                                <h4>Price</h4>
                                <h4>Rp.3.000.000</h4>
                            </div>
                            <svg class="ml-4" width="24" height="24" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.5 22C20.3284 22 21 21.3284 21 20.5C21 19.6716 20.3284 19 19.5 19C18.6716 19 18 19.6716 18 20.5C18 21.3284 18.6716 22 19.5 22Z" fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.5 22C10.3284 22 11 21.3284 11 20.5C11 19.6716 10.3284 19 9.5 19C8.67157 19 8 19.6716 8 20.5C8 21.3284 8.67157 22 9.5 22Z" fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M5 4H22L20 15H7L5 4ZM5 4C4.83333 3.33333 4 2 2 2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M20 15H7H5.23077C3.44646 15 2.5 15.7812 2.5 17C2.5 18.2188 3.44646 19 5.23077 19H19.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>                                  
                </div>
            </div>

            <div class="container mx-auto -mt-20 md:-mt-40 md:-mr-16 lg:-mr-32 px-4 py-8">
                <div class="bg-white shadow-lg rounded-lg px-4 py-8 sm:px-8 sm:py-16 md:px-8 md:py-20">
                    <img src="<?= base_url('img/maggotech2.jpeg') ?>" alt="Maggotech" class="-mt-10 shadow-md border mx-auto">
                    <p class="text-center text-black mt-4 sm:mt-6 md:mt-10">
                        Magokits merupakan budidaya maggot non teknologi atau tradisional namun memiliki peluang untuk mendapatkan pendapatan tambahan yang berkelanjutan. Magokits hadir sebagai paket budidaya maggot yang lebih praktis dan hemat. Magokits menjadi sasaran untuk kamu sebagai pemula dalam membudidayakan maggot.
                    </p>
                    <button class=" buttonPrice bg-gray-300 mt-5 px-20 py-3 rounded-lg font-semibold text-black text-center mx-auto hover:bg-maggotic duration-200 hover:scale-110 hover:text-white flex items-center justify-between w-full" data-product="Magokits">
                        <div class="flex flex-col items-center w-full">
                            <h4>Price</h4>
                            <h4>Rp.120.000</h4>
                        </div>
                        <svg class="ml-4" width="24" height="24" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.5 22C20.3284 22 21 21.3284 21 20.5C21 19.6716 20.3284 19 19.5 19C18.6716 19 18 19.6716 18 20.5C18 21.3284 18.6716 22 19.5 22Z" fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M9.5 22C10.3284 22 11 21.3284 11 20.5C11 19.6716 10.3284 19 9.5 19C8.67157 19 8 19.6716 8 20.5C8 21.3284 8.67157 22 9.5 22Z" fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5 4H22L20 15H7L5 4ZM5 4C4.83333 3.33333 4 2 2 2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M20 15H7H5.23077C3.44646 15 2.5 15.7812 2.5 17C2.5 18.2188 3.44646 19 5.23077 19H19.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>


                        
                 
    </div>
  </div>
</div>
<!-- Modal -->
<div id="myModal" class="fixed inset-0 z-10 hidden overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-6 rounded-lg shadow-lg w-96">
            <form id="orderForm" class="mt-4 relative">
                <span class="absolute top-0 right-0 mr-0 -mt-4 cursor-pointer close" onclick="closeModal()">
                    <svg class="w-6 h-6 text-gray-600 hover:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </span>
                <!-- Form -->
                <label for="productName" class="block">Nama Produk:</label>
                <select id="productName" name="productName" class="border rounded-lg px-3 py-2 mt-1 w-full bg-white text-black">
                    <option value="Garvabin">Garvabin</option>
                    <option value="Magokits">Magokits</option>
                </select>
                <label for="quantity" class="block mt-4">Jumlah:</label>
                <input type="number" id="quantity" name="quantity" class="border rounded-lg px-3 py-2 mt-1 w-full bg-white text-black" required>
                <div id="modalStockMessage1" class="mt-2 text-black font-bold"></div>
                <button type="button" onclick="saveOrder()" class="bg-gray-300 mt-4 px-4 py-2 rounded-lg font-semibold text-black hover:bg-maggotic duration-200 hover:scale-110 hover:text-white w-full">Pesan</button>
            </form>
        </div>
    </div>
</div>


                        <style>/* Style untuk tombol close */
                            /* Style untuk tombol close */
                                .close {
                                position: absolute;
                                top: 0;
                                right: 0;
                                padding: 0.5rem;
                                cursor: pointer;
                                }

                            </style>
                        
                </div>
            </div>
      
   


<div class="relative px-10">
    
    <img src="<?= base_url('img/maggotech3.jpg') ?>" alt="Maggotech3" class="w-full h-96 opacity-75 rounded-lg">
    <div class="absolute top-0 left-0 bg-opacity-50 p-4 text-hitam w-full h-full flex items-center justify-center">
        <p class="text-center text-2xl mt-28">Pesan sekarang dan dapatkan cashback 10% serta layanan <br/> konsultasi budidaya maggot langsung dari tim ahlinya</p>
    </div>

</div>

<div class="relative mt-20 mb-32 px-10">
    
    <img src="<?= base_url('img/maggotech4.jpg') ?>" alt="Maggotech4" class="w-full h-96 opacity-75 rounded-lg">
    <div class="absolute top-0 left-0 bg-opacity-50 p-4 text-white w-full h-full flex items-center justify-center">
        <p class="text-center text-2xl mt-28 px-8">Yuk, mari dukung lingkungan dan peternakan dengan membeli <br/> produk Maggotic! Dengan setiap pembelian, kita juga <br/> berkontribusi pada pengurangan limbah makanan. Ayo, <br/> berlangganan sekarang di maggotic.com</p>
    </div>

</div>


<script>
function toggleText() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("read-more-btn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Baca selengkapnya"; 
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Tutup"; 
        moreText.style.display = "inline";
    }
}

//JS ke WA
document.addEventListener("DOMContentLoaded", function() {
    var modal = document.getElementById('myModal');
    var btns = document.querySelectorAll('.buttonPrice');
    var span = document.getElementsByClassName('close')[0];
    var productName = document.getElementById('productName');
    var quantity = document.getElementById('quantity');
    var modalStockMessage1 = document.getElementById('modalStockMessage1');

    var stockData = {
        "Garvabin": 5,
        "Magokits": 10
    };

    btns.forEach(function(btn) {
        btn.onclick = function() {
            var product = btn.getAttribute("data-product");
            openModal(product);
        };
    });

    span.onclick = function() {
        modal.classList.add("hidden");
    };

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.classList.add("hidden");
        }
    };

    function closeModal() {
        modal.classList.add("hidden");
    }

    function openModal(product) {
        productName.value = product;
        updateStockMessage();
        modal.classList.remove("hidden");
    }

    function updateStockMessage() {
        var selectedProduct = productName.value;
        var stock = stockData[selectedProduct];
        if (stock > 0) {
            modalStockMessage1.textContent = 'Stock Tersedia: ' + stock;
        } else {
            modalStockMessage1.textContent = 'Produk tidak tersedia';
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
        if (productName === "Garvabin") {
            price = 3000000;
        } else if (productName === "Magokits") {
            price = 120000;
        }
        return price * quantity;
    }

    window.closeModal = closeModal;
});



//Modal Price 120.000






</script>
<?= $this->endsection('content'); ?>