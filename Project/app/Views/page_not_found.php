<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Necklace Collection</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
       html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex-grow: 1; /* Pushes footer to bottom */
        }

        footer {
            margin-top: auto; /* Positions it at the bottom */
        }
    </style>
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
    <li><a href="<?= base_url('rings'); ?>" class="hover:text-gray-900">Rings</a></li>
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
    <li><a href="<?= base_url('rings'); ?>" class="hover:text-pink-500">Rings</a></li>
        <li><a href="<?= base_url('necklaces'); ?>" class="hover:text-pink-500">Necklaces</a></li>
        <li><a href="<?= base_url('jewelry'); ?>" class="hover:text-pink-500">Jewelry Set</a></li>
        <li><a href="<?= base_url('about'); ?>" class="hover:text-pink-500">About Us</a></li>
 </ul>
    
    <div class="flex items-center justify-center h-screen overflow-hidden">
        <img src="<?= base_url('page_not_found.png'); ?>" alt="Result not found...." class="h-[70%] ">
    </div>

 <footer class="bg-gray-900 text-white p-8 mt-auto ">
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
</body>
</html>