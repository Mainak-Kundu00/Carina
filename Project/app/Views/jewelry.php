
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewellery Sets</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

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
        <li><a href="index.html" class="hover:text-gray-900">Home</a></li>
        <li><a href="rings.html" class="hover:text-gray-900">Rings</a></li>
        <li><a href="necklaces.html" class="hover:text-gray-900">Necklaces</a></li>
        <li><a href="jewelry-set.html" class="text-blue-600">Jewellery Set</a></li>
        <li><a href="about.html" class="hover:text-gray-900">About Us</a></li>
    </ul>

    <!-- Cart and Profile Buttons -->
    <div class="flex space-x-4 items-center">
        <button class="text-gray-700 hover:text-gray-900">
            <img src="shopping-cart.png" alt="Cart" class="h-6 w-6">
        </button>
        <a href="sign-up.html">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Sign Up</button>
        </a>
    </div>
</nav>


<!-- Mobile Dropdown Menu -->
<ul id="mobile-menu" class="hidden fixed top-16 left-0 bg-white w-full shadow-md flex-col space-y-4 p-4 md:hidden z-50">
    <li><a href="index.html" class="hover:text-pink-500">Home</a></li>
    <li><a href="rings.html" class="hover:text-pink-500">Rings</a></li>
    <li><a href="necklaces.html" class="hover:text-pink-500">Necklaces</a></li>
    <li><a href="jewelry-set.html" class="text-blue-600">Jewelry Set</a></li>
    <li><a href="about.html" class="hover:text-pink-500">About Us</a></li>
</ul>


    <!-- Banner Section -->
    <header class="relative">
        <img src="jewellery-set.png" alt="Rings Banner" class="w-full h-64 object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-white">
            <h1 class="text-4xl font-bold">Priceless Jewellery sets</h1>
            <p class="text-lg">See the limitless style and express your personality.</p>
        </div>
    </header>
    
    <!-- Collection Title -->
    <section class="py-10 text-center">
        <h2 class="text-3xl font-semibold">Jewellery Sets</h2>
    </section>
    
    <!-- Necklace Grid -->
    <section class="container mx-auto px-4 pb-16">
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-6 justify-center">
        <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
            <img src="silver-set.webp" alt="Royal Diamond Ring" class="w-full h-48 object-cover">
            <div class="p-4">
                <p class="text-sm text-white bg-gray-500 rounded-full px-3 py-1 uppercase inline-block">Category</p>
                <h3 class="text-lg font-semibold mt-2">Elegant silver</h3>
                <p class="text-gray-600 text-sm">Timeless silver craftsmanship.</p>
                <button class="mt-2 bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 hover:shadow-lg">Buy Now</button>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
            <img src="gold-set.png" alt="Ethenic Gold Ring" class="w-full h-48 object-cover">
            <div class="p-4">
                <p class="text-sm text-white bg-gray-500 rounded-full px-3 py-1 uppercase inline-block">Category</p>
                <h3 class="text-lg font-semibold mt-2">Stylish Gold</h3>
                <p class="text-gray-600 text-sm">Royal and sharp gold design.</p>
                <button class="mt-2 bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 hover:shadow-lg">Buy Now</button>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
            <img src="diamond-set.webp" alt="Classic diamond-necklace" class="w-full h-48 object-cover">
            <div class="p-4">
                <p class="text-sm text-white bg-gray-500 rounded-full px-3 py-1 uppercase inline-block">Category</p>
                <h3 class="text-lg font-semibold mt-2">Premium Diamond</h3>
                <p class="text-gray-600 text-sm">Unmatched royalty and elegance.</p>
                <button class="mt-2 bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 hover:shadow-lg">Buy Now</button>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
            <img src="platinum-set.jpg" alt="Elegant Platinum necklace" class="w-full h-48 object-cover">
            <div class="p-4">
                <p class="text-sm text-white bg-gray-500 rounded-full px-3 py-1 uppercase inline-block">Category</p>
                <h3 class="text-lg font-semibold mt-2">Mighty Platinum</h3>
                <p class="text-gray-600 text-sm">Sleek, modern Platinum design.</p>
                <button class="mt-2 bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 hover:shadow-lg">Buy Now</button>
            </div>
        </div>
    </section>
    
    <!-- Hamburger Menu Functionality -->
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

    
</body>
</html>
