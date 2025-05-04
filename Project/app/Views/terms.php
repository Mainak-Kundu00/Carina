<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Terms & Conditions | Your Jewelry Store</title>
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
        <li><a href="index.html" class="hover:text-gray-900">Home</a></li>
        <li><a href="rings.html" class="hover:text-gray-900">Rings</a></li>
        <li><a href="necklaces.html" class="hover:text-gray-900">Necklaces</a></li>
        <li><a href="jewelry-set.html" class="hover:text-gray-900">Jewelry Set</a></li>
        <li><a href="about.html" class="hover:text-gray-900">About Us</a></li>
    </ul>

        <!-- Cart and Sign-Up -->
        <div class="flex space-x-4 items-center">
            <a href="cart.html">
            <button class="text-gray-700 hover:text-gray-900">
                <img src="shopping-cart.png" alt="Cart" class="h-6 w-6">
            </button>
        </a>
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
    <li><a href="jewelry-set.html" class="hover:text-pink-500">Jewelry Set</a></li>
    <li><a href="about.html" class="hover:text-pink-500">About Us</a></li>
</ul>
  

  <!-- Main Content -->
  <main class="container mx-auto px-4 py-10 max-w-4xl">
    <h2 class="text-3xl font-semibold mb-6">Terms & Conditions</h2>
    
    <section class="mb-6">
      <h3 class="text-xl font-semibold mb-2">1. Introduction</h3>
      <p class="text-gray-700">Welcome to Your Jewelry Store. These Terms and Conditions govern your use of our website and the services we offer. By accessing or using our website, you agree to be bound by these terms.</p>
    </section>

    <section class="mb-6">
      <h3 class="text-xl font-semibold mb-2">2. Products and Pricing</h3>
      <p class="text-gray-700">All products displayed on our website are subject to availability and we reserve the right to change prices at any time without prior notice.</p>
    </section>

    <section class="mb-6">
      <h3 class="text-xl font-semibold mb-2">3. Order & Payment</h3>
      <p class="text-gray-700">Orders will only be confirmed once full payment has been received. We accept major credit cards and secure payment methods.</p>
    </section>

    <section class="mb-6">
      <h3 class="text-xl font-semibold mb-2">4. Shipping & Delivery</h3>
      <p class="text-gray-700">We offer worldwide shipping. Delivery times may vary depending on your location and selected shipping method.</p>
    </section>

    <section class="mb-6">
      <h3 class="text-xl font-semibold mb-2">5. Returns & Refunds</h3>
      <p class="text-gray-700">If you are not satisfied with your purchase, you may return it within 14 days of receipt. Please refer to our Return Policy for details.</p>
    </section>

    <section class="mb-6">
      <h3 class="text-xl font-semibold mb-2">6. Intellectual Property</h3>
      <p class="text-gray-700">All content on this website, including images and text, is the property of Your Jewelry Store and may not be copied or reused without permission.</p>
    </section>

    <section class="mb-6">
      <h3 class="text-xl font-semibold mb-2">7. Contact Information</h3>
      <p class="text-gray-700">If you have any questions about these Terms and Conditions, please contact us at support@yourjewelrystore.com.</p>
    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-100 mt-10">
    <div class="container mx-auto px-4 py-6 text-center text-gray-600 text-sm">
      &copy; 2025 Your Jewelry Store. All rights reserved.
    </div>
  </footer>

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
