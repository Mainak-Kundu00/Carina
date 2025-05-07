<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Our Policy</title>
  <script src="https://cdn.tailwindcss.com"></script>
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
    <li><a href="<?= base_url('/'); ?>" class="hover:text-gray-900">Home</a></li>
        <li><a href="<?= base_url('rings'); ?>" class="hover:text-gray-900">Rings</a></li>
        <li><a href="<?= base_url('necklaces'); ?>" class="hover:text-gray-900">Necklaces</a></li>
        <li><a href="<?= base_url('jewelry'); ?>" class="hover:text-gray-900">Jewelry Set</a></li>
        <li><a href="<?= base_url('about'); ?>" class="hover:text-gray-900">About Us</a></li>
    </ul>

        <!-- Cart and Sign-Up -->
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
    <li><a href="<?= base_url('about'); ?>" class="hover:text-pink-500">About Us</a></li>
</ul>


  <div class="w-full lg:w-3/4 mx-auto bg-white shadow-md rounded-xl p-6 md:p-10">
    <h1 class="text-3xl md:text-4xl font-bold text-center text-indigo-700 mb-10">Our Policies</h1>
    
    <div class="space-y-8">

      <div>
        <h2 id="refunds" class="text-2xl font-semibold text-indigo-600 mb-2">Refund Policy</h2>
        <p class="text-gray-600 leading-relaxed">
          We offer refunds only under specific circumstances, such as damaged or incorrect items. Refund requests must be submitted within 7 days of delivery along with proof (images) of the issue.
        </p>
      </div>

      <div>
        <h2 id="cod" class="text-2xl font-semibold text-indigo-600 mb-2">Cash on Delivery (COD)</h2>
        <p class="text-gray-600 leading-relaxed">
          We support Cash on Delivery for select pin codes. Please ensure someone is available at the address to receive and pay for the order at the time of delivery.
        </p>
      </div>

      <div>
        <h2 id="returns" class="text-2xl font-semibold text-indigo-600 mb-2">Return & Exchange</h2>
        <p class="text-gray-600 leading-relaxed">
          Products can be returned within 7 days of receiving the order. Items must be unused, in original packaging, and accompanied by the receipt. Shipping charges for returns are borne by the customer.
        </p>
        <p class="text-gray-600 leading-relaxed">
            Exchanges are allowed in case of sizing issues or incorrect product delivery. You may request an exchange within 7 days of receipt. Items must be returned in original condition.
          </p>
      </div>

    </div>
  </div>

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
