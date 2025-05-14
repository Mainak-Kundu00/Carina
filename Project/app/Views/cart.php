<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Checkout</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body class="flex flex-col min-h-screen bg-gray-100">

<!-- Navbar -->
<nav class="bg-gray-200 px-6 py-3 flex justify-between items-center sticky top-0 z-10">
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
    </div>

    <ul class="hidden md:flex space-x-6 text-gray-700">
        <li><a href="<?= base_url('/'); ?>" class="hover:text-gray-900">Home</a></li>
        <li><a href="<?= base_url('rings'); ?>" class="hover:text-gray-900">Rings</a></li>
        <li><a href="<?= base_url('necklaces'); ?>" class="hover:text-gray-900">Necklaces</a></li>
        <li><a href="<?= base_url('jewelry'); ?>" class="hover:text-gray-900">Jewelry Set</a></li>
        <li><a href="<?= base_url('about'); ?>" class="hover:text-gray-900">About Us</a></li>
    </ul>

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

<!-- Mobile Menu -->
<ul id="mobile-menu" class="hidden fixed top-16 left-0 bg-white w-full shadow-md flex-col space-y-4 p-4 md:hidden z-50">
    <li><a href="<?= base_url('/'); ?>" class="hover:text-pink-500">Home</a></li>
    <li><a href="<?= base_url('rings'); ?>" class="hover:text-pink-500">Rings</a></li>
    <li><a href="<?= base_url('necklaces'); ?>" class="hover:text-pink-500">Necklaces</a></li>
    <li><a href="<?= base_url('jewelry'); ?>" class="hover:text-pink-500">Jewelry Set</a></li>
    <li><a href="<?= base_url('about'); ?>" class="hover:text-pink-500">About Us</a></li>
</ul>

  <!-- Main Content -->
  <main class="px-4 md:px-10 py-10">
    <h1 class="text-2xl font-bold mb-6">Checkout</h1>
    <div class="flex flex-col lg:flex-row gap-8">
      <!-- Order Summary -->
      <div class="w-full lg:w-2/3 bg-gray-100 rounded-xl p-6">
        <h2 class="font-semibold text-lg mb-4 flex items-center"><i class="fas fa-shopping-cart mr-2"></i>Order summary</h2>
        <div class="overflow-x-auto">
          <table class="w-full text-sm">
            <thead>
              <tr class="text-left border-b border-gray-300">
                <th class="py-2">Name</th>
                <th class="py-2">Price</th>
                <th class="py-2">Quantity</th>
                <th class="py-2">Total</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr class="border-b border-gray-200">
                <td class="py-3 flex items-center gap-2"><img src="diamond-ring.png" class="w-10 h-10 rounded" /> Product name</td>
                <td>$52</td>
                <td>
                  <div class="flex items-center gap-2">
                    <span>2</span>
                  </div>
                </td>
                <td>$52</td>
                <td><i class="fas fa-trash text-red-500"></i></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Payment Method & Summary -->
      <div class="w-full lg:w-1/3 bg-gray-100 rounded-xl p-6">
        <h2 class="font-semibold text-lg mb-2"><i class="fas fa-credit-card mr-2"></i>Payment Summary</h2>
        <div class="text-sm space-y-2">
          <div class="flex justify-between"><span>Subtotal</span><span>$180</span></div>
          <div class="flex justify-between"><span>Discount</span><span class="text-red-500">- $15</span></div>
          <div class="flex justify-between"><span>Delivery Fee</span><span>$22</span></div>
          <div class="flex justify-between font-bold border-t pt-2"><span>Total</span><span>$187</span></div>
        </div>
        <button class="mt-4 w-full bg-indigo-500 text-white py-2 rounded-lg">Proceed to payment</button>
      </div>
    </div>
  </main>

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

<!-- Hamburger Menu Script -->
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', (event) => {
        mobileMenu.classList.toggle('hidden');
        event.stopPropagation();
    });

    document.addEventListener('click', (event) => {
        if (!mobileMenu.classList.contains('hidden') &&
            !menuToggle.contains(event.target) &&
            !mobileMenu.contains(event.target)) {
            mobileMenu.classList.add('hidden');
        }
    });

  const decrementBtns = document.querySelectorAll('.decrement-btn');
  const incrementBtns = document.querySelectorAll('.increment-btn');

  decrementBtns.forEach((btn) => {
    btn.addEventListener('click', () => {
      const input = btn.nextElementSibling;
      let value = parseInt(input.value);
      if (value > 1) {
        input.value = value - 1;
      }
    });
  });

  incrementBtns.forEach((btn) => {
    btn.addEventListener('click', () => {
      const input = btn.previousElementSibling;
      let value = parseInt(input.value);
      input.value = value + 1;
    });
  });

</script>

</body>
</html>
