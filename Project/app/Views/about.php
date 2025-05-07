
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Jewelry Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

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
        <li><a href="<?= base_url('/'); ?>" class="hover:text-gray-900">Home</a></li>
        <li><a href="<?= base_url('rings'); ?>" class="hover:text-gray-900">Rings</a></li>
        <li><a href="<?= base_url('necklaces'); ?>" class="hover:text-gray-900">Necklaces</a></li>
            <li><a href="<?= base_url('jewelry'); ?>" class="hover:text-gray-900">Jewellery Set</a></li>
            <li><a href="<?= base_url('about'); ?>" class="text-blue-600">About Us</a></li>
        </ul>
    
        <!-- Cart and Profile Buttons -->
        <div class="flex space-x-4 items-center">
        <a href="<?= base_url('cart'); ?>">
        <button class="text-gray-700 hover:text-gray-900">
            <img src="shopping-cart.png" alt="Cart" class="h-6 w-6">
        </button>
    </a>
            <a href="<?= base_url('sign_up'); ?>">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Sign Up</button>
            </a>
        </div>
    </nav>
    
    
    <!-- Mobile Dropdown Menu -->
    <ul id="mobile-menu" class="hidden fixed top-16 left-0 bg-white w-full shadow-md flex-col space-y-4 p-4 md:hidden z-50">
    <li><a href="<?= base_url('/'); ?>" class="hover:text-pink-500">Home</a></li>
    <li><a href="<?= base_url('rings'); ?>" class="hover:text-pink-500">Rings</a></li>
    <li><a href="<?= base_url('necklaces'); ?>" class="hover:text-pink-500">Necklaces</a></li>
        <li><a href="<?= base_url('jewelry'); ?>" class="hover:text-pink-500">Jewelry Set</a></li>
        <li><a href="<?= base_url('about'); ?>" class="text-blue-600">About Us</a></li>
    </ul>

    <!-- About Us Section -->
    <section class="bg-white py-12">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-6">About Us</h1>
            <p class="text-gray-600 text-lg leading-7">
                Welcome to <strong>Carina Jewelry</strong>, where elegance meets affordability. Our mission is to offer the best designs, crafted with unparalleled quality, at the most affordable prices. 
            </p>
            <p class="text-gray-600 text-lg leading-7 mt-4">
                We believe jewelry should be accessible to everyone who cherishes beauty and fine craftsmanship. From timeless classics to contemporary designs, our collections are meticulously curated to suit every style and occasion.
            </p>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="bg-gray-100 py-12">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Values</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
                <div>
                    <img src="gold-ring.jpg" alt="Quality" class="h-20 mx-auto mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Uncompromising Quality</h3>
                    <p class="text-gray-600 text-sm">
                        We take pride in delivering the finest jewelry, designed and crafted with the utmost care and attention to detail.
                    </p>
                </div>
                <div>
                    <img src="silver-necklace.jpg" alt="Affordability" class="h-20 mx-auto mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Affordability</h3>
                    <p class="text-gray-600 text-sm">
                        Our goal is to make luxury accessible. We strive to provide premium jewelry at prices that fit your budget.
                    </p>
                </div>
                <div>
                    <img src="diamond-set.webp" alt="Design" class="h-20 mx-auto mb-4">
                    <h3 class="text-lg font-semibold text-gray-700">Innovative Designs</h3>
                    <p class="text-gray-600 text-sm">
                        We blend timeless elegance with modern trends to create designs that resonate with every individual.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="bg-white py-12">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Contact Us</h2>
            <p class="text-gray-600 text-lg leading-7">
                Have questions or need assistance? We'd love to hear from you. Contact us at:
            </p>
            <p class="text-blue-600 text-lg mt-4">
                <strong>Email:</strong> support@Carina.com <br>
                <strong>Phone:</strong> +123 456 7890
            </p>
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
