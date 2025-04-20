<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelry Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('background.jpg') no-repeat center center/cover;
            opacity: 0.2;
            z-index: -1;
        }
    </style>
</head>
<body class="bg-gray-100 relative flex flex-col min-h-screen">

    
    <!-- Navbar -->
<nav class="bg-gray-200 px-6 py-3 flex justify-between items-center sticky top-0 z-10">
    <!-- Logo and Hamburger Menu -->
    <div class="flex items-center space-x-4">
        <button id="menu-toggle" class="md:hidden text-gray-700 hover:text-gray-900">
            ☰
        </button>
        <img src="logo.jpg" alt="Logo" class="h-8">
    </div>

    <!-- Desktop Menu -->
    <ul class="hidden md:flex space-x-6 text-gray-700">
        <li><a href="<?= base_url('rings'); ?>" class="hover:text-gray-900">Rings</a></li>
        <li><a href="<?= base_url('necklaces'); ?>" class="hover:text-gray-900">Necklaces</a></li>
        <li><a href="<?= base_url('jewelry'); ?>" class="hover:text-gray-900">Jewelry Set</a></li>
        <li><a href="<?= base_url('about'); ?>" class="hover:text-gray-900">About Us</a></li>
    </ul>
    
    <!-- Cart and Sign-Up -->
    <div class="flex space-x-4 items-center">
        <button class="text-gray-700 hover:text-gray-900">
            <img src="shopping-cart.png" alt="Cart" class="h-6 w-6">
        </button>
        <a href="<?= base_url('sign_up'); ?>">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Sign Up</button>
        </a>
    </div>
</nav>

<!-- Mobile Dropdown Menu -->
<ul id="mobile-menu" class="hidden fixed top-16 left-0 bg-white w-full shadow-md flex-col space-y-4 p-4 md:hidden z-50">
    <li><a href="rings.html" class="hover:text-pink-500">Rings</a></li>
    <li><a href="necklaces.html" class="hover:text-pink-500">Necklaces</a></li>
    <li><a href="jewelry-set.html" class="hover:text-pink-500">Jewelry Set</a></li>
    <li><a href="about.html" class="hover:text-pink-500">About Us</a></li>
</ul>




    <!-- Search Bar -->
    <div class="flex justify-center mt-4 px-4">
        <div class="flex items-center bg-white text-black rounded-full px-4 py-2 w-60 sm:w-80 md:w-[500px] lg:w-[600px] shadow-md">
            <img src="loupe.png" alt="Search" class="w-5 h-5">
            <input id="search-bar" type="text" placeholder="Search..." class="bg-transparent outline-none px-3 flex-grow text-sm">
        </div>
    </div>
    
    <!-- Hero Section -->
    <section class="relative w-full h-[400px] bg-cover bg-center flex flex-col justify-center items-center text-center" style="background-image: url('background.jpg');">
        <h1 class="text-5xl text-white font-bold drop-shadow-lg">Elegant Jewelry for Every Occasion</h1>
        <button class="mt-4 bg-pink-500 text-white px-6 py-2 rounded-full hover:bg-pink-600 transition duration-300">Shop Now</button>
    </section>

    <!-- Product Section -->
    <div class="text-center my-10">
        <h2 class="text-3xl font-bold">Products</h2>
        <p class="text-gray-600">Discover our latest collection</p>
    </div>

    <div id="product-list" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-10 mb-16">
        <div class="bg-white p-4 shadow-md rounded-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 hover:shadow-lg duration-300">
            <img src="jhumka.jpeg" class="w-full h-72 object-cover rounded-md">
            <h3 class="font-bold mt-2 hover:text-pink-500 transition-colors duration-300">Jhumka</h3>
            <p class="text-lg font-semibold">₹230</p>
            <p class="text-sm text-gray-500">126 items sold</p>
        </div>
        <div class="bg-white p-4 shadow-md rounded-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 hover:shadow-lg duration-300">
            <img src="chain.JPG" class="w-full h-72 object-cover rounded-md">
            <h3 class="font-bold mt-2 hover:text-pink-500 transition-colors duration-300">Chain</h3>
            <p class="text-lg font-semibold">₹190</p>
            <p class="text-sm text-gray-500">243 items sold</p>
        </div>
        <div class="bg-white p-4 shadow-md rounded-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 hover:shadow-lg duration-300">
            <img src="kaner.JPG" class="w-full h-72 object-cover rounded-md">
            <h3 class="font-bold mt-2 hover:text-pink-500 transition-colors duration-300">Classic Top</h3>
            <p class="text-lg font-semibold">₹150</p>
            <p class="text-sm text-gray-500">199 items sold</p>
        </div>
    </div>
    
    <!-- Footer -->

        <footer class="bg-gray-900 text-white p-8 mt-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-center md:text-left">
                <div>
                    <h3 class="font-bold mb-2">
                        <img src="wlogo.jpg" alt="Logo" class="h-12 mx-auto md:mx-0">
                    </h3>
                </div>
                <div>
                    <h3 class="font-bold mb-2">Our Policy</h3>
                    <ul class="space-y-1">
                        <li><a href="#" class="hover:text-gray-400">Refunds</a></li>
                        <li><a href="#" class="hover:text-gray-400">COD</a></li>
                        <li><a href="#" class="hover:text-gray-400">Return & Exchange</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-2">Contact Us</h3>
                    <p class="text-sm">Email: support@Carina.com</p>
                    <p class="text-sm">Phone: +123 456 7890</p>
                </div>
                <div>
                    <h3 class="font-bold mb-2">Address</h3>
                    <p class="text-sm">123 Jewelry St, NY, USA</p>
                </div>
            </div>
            <div class="text-center text-sm text-gray-400 mt-6 border-t border-gray-700 pt-4">
                &copy; 2025 Carina Jewelry. All rights reserved.
            </div>
        </footer>
    
    <!--Search Bar Functionality-->
    <script>
    // Toggle Hamburger Menu
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    // Open/Close Menu
    menuToggle.addEventListener('click', (event) => {
        mobileMenu.classList.toggle('hidden'); // Toggle visibility
        event.stopPropagation(); // Prevents menu from closing immediately
    });

    // Close Menu When Clicking Outside
    document.addEventListener('click', (event) => {
        if (!mobileMenu.classList.contains('hidden') &&
            !menuToggle.contains(event.target) &&
            !mobileMenu.contains(event.target)) {
            mobileMenu.classList.add('hidden'); // Close the dropdown
        }
    });

    document.addEventListener('click', (event) => {
        if (!mobileMenu.classList.contains('hidden') && !menuToggle.contains(event.target) && !mobileMenu.contains(event.target)) {
            mobileMenu.classList.add('hidden');
        }
    });

        document.getElementById('search-bar').addEventListener('input', function() {
            let filter = this.value.toLowerCase();
            let products = document.querySelectorAll('#product-list > div');
            products.forEach(product => {
                let title = product.querySelector('h3').textContent.toLowerCase();
                product.style.display = title.includes(filter) ? 'block' : 'none';
            });
        });
    </script>
</body>
</html>
