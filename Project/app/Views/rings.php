
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rings Collection</title>
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
        <?php
            $imageProperties = [
                'src'    => 'logo.jpg',
                'alt'    => 'Carina',
                'width'  => '90'
            ];
            echo img($imageProperties);?>
    </div>

    <!-- Desktop Menu -->
    <ul class="hidden md:flex space-x-6 text-gray-700">
    <li><a href="<?= base_url('/'); ?>" class="hover:text-gray-900">Home</a></li>
        <li><a href="<?= base_url('rings'); ?>" class="text-blue-600">Rings</a></li>
        <li><a href="<?= base_url('necklaces'); ?>" class="hover:text-gray-900">Necklaces</a></li>
        <li><a href="<?= base_url('jewelry'); ?>" class="hover:text-gray-900">Jewellery Set</a></li>
        <li><a href="<?= base_url('about'); ?>" class="hover:text-gray-900">About Us</a></li>
    </ul>

    <!-- Cart and Profile Buttons -->
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
<li><a href="<?= base_url('/'); ?>" class="hover:text-pink-500">Home</a></li>
    <li><a href="<?= base_url('rings'); ?>" class="text-blue-600">Rings</a></li>
    <li><a href="<?= base_url('necklaces'); ?>" class="hover:text-pink-500">Necklaces</a></li>
    <li><a href="<?= base_url('jewelry'); ?>" class="hover:text-pink-500">Jewelry Set</a></li>
    <li><a href="<?= base_url('about'); ?>" class="hover:text-pink-500">About Us</a></li>
</ul>

<!-- Banner Section -->
<header class="relative">
    <img src="<?= base_url('ring.webp'); ?>" alt="Rings Banner" class="w-full h-64 object-cover">
    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-white">
        <h1 class="text-4xl font-bold">Exquisite Rings Collection</h1>
        <p class="text-lg">Discover the timeless elegance and unmatched quality of our rings.</p>
    </div>
</header>

<!-- Collection Title -->
<section class="py-10 text-center">
    <h2 class="text-3xl font-semibold">Ring Collection</h2>
</section>

<!-- Rings Grid -->
<section class="container mx-auto px-4 pb-16">
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-6 justify-center">
        <?php foreach($rings as $item):?>
          
            <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">

                <img src="<?= base_url("uploads/".$item['product_img']); ?>" alt="Royal Diamond Ring" class="w-full h-48 object-cover">
                <div class="p-4">

                    <p class="text-sm text-white bg-gray-500 rounded-full px-3 py-1 uppercase inline-block"><?= $item['product_category'];?></p>
                    <h3 class="text-lg font-semibold mt-2"><?= $item['product_name'];?></h3>

                    <span class="text-gray-600 text-sm"><?= $item['quantity'];?> left</span>
 
                    <p class="text-gray-600 text-sm">₹<?= $item['product_price'];?></p>

                    <?php if($item['quantity'] > 0):?>
                    <a href="<?= base_url('quantity?product_id='. $item['id'])?>"> 
                        <button type="submit" class="mt-2 bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 hover:shadow-lg">Add to cart</button>
                    </a>
                    <?php else:?>
                        <button type="submit" class="mt-2 bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 hover:shadow-lg">Out of Stock</button>
                    <?php endif; ?>
                </div>
            </div> 
        <?php endforeach ?>
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
