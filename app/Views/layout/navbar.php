<style>
@media(max-width:800px) {
    .menu-navbar {
        display: none;
    }
}
</style>
<nav class="text-white bg-maggotic py-3 px-6 flex items-center justify-between fixed top-0 left-0 w-full z-50">

    <div class="flex">
        <a class="font-bold text-2xl tracking-tight me-5" href="#">Maggotic</a>
        <svg width="35" height="35" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M19.5 22C20.3284 22 21 21.3284 21 20.5C21 19.6716 20.3284 19 19.5 19C18.6716 19 18 19.6716 18 20.5C18 21.3284 18.6716 22 19.5 22Z"
                fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
            <path
                d="M9.5 22C10.3284 22 11 21.3284 11 20.5C11 19.6716 10.3284 19 9.5 19C8.67157 19 8 19.6716 8 20.5C8 21.3284 8.67157 22 9.5 22Z"
                fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M5 4H22L20 15H7L5 4ZM5 4C4.83333 3.33333 4 2 2 2" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" />
            <path d="M20 15H7H5.23077C3.44646 15 2.5 15.7812 2.5 17C2.5 18.2188 3.44646 19 5.23077 19H19.5"
                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </div>

    <div class="menu-navbar md:flex items-center">
        <!-- Hide on mobile -->
        <a class="text-md px-4 py-2 leading-none rounded-full hover:bg-gray-700" href="/">Beranda</a>
        <a class="text-md px-4 py-2 leading-none rounded-full hover:bg-gray-700" href="/ecolocator">EcoLocator</a>
        <a class="text-md px-4 py-2 leading-none rounded-full hover:bg-gray-700" href="/smartgot">Smartgot</a>
        <a class="text-md px-4 py-2 leading-none rounded-full hover:bg-gray-700" href="/maggotech">Maggotech</a>
        <a class="text-md px-4 py-2 leading-none rounded-full hover:bg-gray-700" href="/produk">Produk</a>
        <a class="text-md px-4 py-2 leading-none rounded-full hover:bg-gray-700" href="/zakatin">Zakatin</a>
    </div>

    <!-- Toggler Icon -->
    <div class="md:hidden flex items-center">
        <button id="menu-toggle"
            class="focus:outline-none flex items-center px-3 py-2 border-2 rounded text-gray-200 border-gray-400 hover:text-white hover:border-white">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

</nav>

<!-- Mobile Menu -->
<div id="mobile-menu"
    class="md:hidden fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-85 z-50 overflow-y-auto hidden">
    <div class="flex justify-end pt-4 pr-4">
        <button id="close-menu" class="text-gray-300 focus:outline-none">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <div class="flex flex-col items-center justify-center h-full">
        <a class="text-gray-300 py-2 px-4 block hover:text-white" href="/">Beranda</a>
        <a class="text-gray-300 py-2 px-4 block hover:text-white" href="/ecolocator">EcoLocator</a>
        <a class="text-gray-300 py-2 px-4 block hover:text-white" href="/smartgot">Smartgot</a>
        <a class="text-gray-300 py-2 px-4 block hover:text-white" href="/maggotech">Maggotech</a>
        <a class="text-gray-300 py-2 px-4 block hover:text-white" href="/produk">Produk</a>
        <a class="text-gray-300 py-2 px-4 block hover:text-white" href="/zakatin">Zakatin</a>
    </div>
</div>

<script>
// Toggle mobile menu
document.getElementById('menu-toggle').addEventListener('click', function() {
    document.getElementById('mobile-menu').classList.toggle('hidden');
});

// Close mobile menu
document.getElementById('close-menu').addEventListener('click', function() {
    document.getElementById('mobile-menu').classList.add('hidden');
});
</script>