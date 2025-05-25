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
        input::-webkit-calendar-picker-indicator {
        display: none !important;
        }
        input[type="text"]::-moz-listbox {
            display: none !important;
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
        <a href="<?= base_url('Admin_panel'); ?>">
            <?php
                $imageProperties = [
                    'src'    => 'logo.jpg',
                    'alt'    => 'Carina',
                    'width'  => '90'
                ];
                echo img($imageProperties);?> 
        </a>  
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
        <a href="<?= base_url('cart'); ?>">
        <button class="text-gray-700 hover:text-gray-900">
            <?php
            $image = [
                'src'    => 'shopping_cart.png',
                'alt'    => 'Cart',
                'width'  => '30'
            ];
            echo img($image);?>
        </button>
     </a>
        <?php if(session()->get('user_id') == NULL){?>
        <a href="<?= base_url('sign_up'); ?>">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Sign Up</button>
        </a>
        <?php }else{?>
            <a href="<?= base_url('profile'); ?>">
            <button class="bg-blue-300 px-2 py-1 rounded-lg"><?php
            $profile = [
                'src'    => 'profile.png',
                'alt'    => 'Profile',
                'width'  => '30'
            ];
            echo img($profile);?></button>
        </a>
        <?php }?>
    </div>
</nav>

<!-- Mobile Dropdown Menu -->
<ul id="mobile-menu" class="hidden fixed top-16 left-0 bg-white w-full shadow-md flex-col space-y-4 p-4 md:hidden z-50">
    <li><a href="<?= base_url('rings'); ?>" class="hover:text-pink-500">Rings</a></li>
    <li><a href="<?= base_url('necklaces'); ?>" class="hover:text-pink-500">Necklaces</a></li>
    <li><a href="<?= base_url('jewelry'); ?>" class="hover:text-pink-500">Jewelry Set</a></li>
    <li><a href="<?= base_url('about'); ?>" class="hover:text-pink-500">About Us</a></li>
</ul>




    <!-- Search Bar -->
    <form action="<?= base_url('Search');?>" method="GET">
    <div class="flex justify-center mt-4 px-4">
        <div class="flex items-center bg-white text-black rounded-full px-4 py-2 w-60 sm:w-80 md:w-[500px] lg:w-[600px] shadow-md">
            <img src="<?= base_url('loupe.png'); ?>" alt="Search" class="w-5 h-5">
            <input list="suggestions" name="search" type="text" placeholder="Search..." class="bg-transparent outline-none px-3 flex-grow text-sm">
        </div>
        <!-- Custom Dropdown -->
        <datalist id="suggestions">
            <option value="Rings">
            <option value="Necklaces">
            <option value="Jewelry set">
        </datalist>
    </div>
    </form>
    
    <!-- Hero Section -->
    <section class="relative w-full h-[400px] bg-cover bg-center flex flex-col justify-center items-center text-center" style="background-image: url('background.jpg');">
        <h1 class="text-5xl text-white font-bold drop-shadow-lg">Elegant Jewelry for Every Occasion</h1>
        <a href="<?= base_url('shop_now'); ?>">
        <button class="mt-4 bg-pink-500 text-white px-6 py-2 rounded-full hover:bg-pink-600 transition duration-300">Shop Now</button>
        </a>
    </section>

    <!-- Product Section -->
    <div class="text-center my-10">
        <h2 class="text-5xl font-bold">Products</h2>
        <p class="text-gray-600">Discover our latest collection</p>
    </div>

    <div id="product-list" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-10 mb-16">
        <div class="bg-white p-4 shadow-md rounded-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 hover:shadow-lg duration-300">
            <a href="<?= base_url('rings'); ?>">
                <img src="gold_ring.jpg" class="w-full h-72 object-cover rounded-md">
                <h3 class="font-bold mt-5 text-2xl hover:text-pink-500 transition-colors duration-300">Ring</h3>
            </a>
        </div>
        
        <a href="<?= base_url('necklaces'); ?>">
            <div class="bg-white p-4 shadow-md rounded-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 hover:shadow-lg duration-300">
                <img src="chain.JPG" class="w-full h-72 object-cover rounded-md">
                <h3 class="font-bold mt-5 text-2xl hover:text-pink-500 transition-colors duration-300">Chain</h3>
            </div>
         </a>
        
        <a href="<?= base_url('jewelry'); ?>">
        <div class="bg-white p-4 shadow-md rounded-lg flex flex-col items-center text-center transition-transform transform hover:scale-105 hover:shadow-lg duration-300">
            <img src="kaner.JPG" class="w-full h-72 object-cover rounded-md">
            <h3 class="font-bold mt-5 text-2xl hover:text-pink-500 transition-colors duration-300">Classic Set</h3>
        </div>
        </a>

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
                        <li><a href="<?= base_url('our_policy'); ?>" class="hover:text-gray-400">Refunds</a></li>
                        <li><a href="<?= base_url('our_policy'); ?>" class="hover:text-gray-400">COD</a></li>
                        <li><a href="<?= base_url('our_policy'); ?>" class="hover:text-gray-400">Return & Exchange</a></li>
                      </ul>
                </div>
                <div>
                    <h3 class="font-bold mb-2">Contact Us</h3>
                    <p class="text-sm">Email: support@Carina.com</p>
                    <p class="text-sm">Phone: +91 62896 34086</p>
                </div>
                <div>
                    <h3 class="font-bold mb-2">Address</h3>
                    <p class="text-sm"> 129, Belilious Rd, Howrah, India</p>
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


    </script>

    <!-- javascript code to be removed -->
    <!-- document.getElementById("search-bar").addEventListener("focus", function() {
    document.getElementById("suggestions").classList.remove("hidden");
});

document.getElementById("search-bar").addEventListener("blur", function() {
    setTimeout(() => {
        document.getElementById("suggestions").classList.add("hidden");
    }, 200); // Delay to allow option selection before hiding
});

function selectOption(element) {
    document.getElementById("search-bar").value = element.innerText;
    document.getElementById("suggestions").classList.add("hidden");
} -->
</body>
</html>
