<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Orders</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex justify-center items-center p-4">
  <div class="bg-white rounded-xl shadow-xl p-6 md:p-10 w-full max-w-4xl">
    <h1 class="text-3xl font-bold text-center mb-8">ORDERS</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div>
        <!-- Repeated product block -->
        <div class="flex items-center gap-4 mb-4" id="order-list">
          <img src="platinum-ring.png" class="w-20 h-20 rounded-md object-cover" />
          <div class="flex-1">
            <h2 class="font-bold text-sm">Product title <span class="font-normal ml-2">Quantity <b>2</b></span></h2>
            <p class="text-sm text-gray-500">Description..</p>
            <p class="font-semibold mt-1">$200</p>
          </div>
        </div>
        <div class="flex items-center gap-4 mb-4">
          <img src="gold-ring.jpg" class="w-20 h-20 rounded-md object-cover" />
          <div class="flex-1">
            <h2 class="font-bold text-sm">Product title <span class="font-normal ml-2">Quantity <b>2</b></span></h2>
            <p class="text-sm text-gray-500">Description..</p>
            <p class="font-semibold mt-1">$200</p>
          </div>
        </div>
        <div class="flex items-center gap-4 mb-4">
          <img src="platinum-necklace.jpeg" class="w-20 h-20 rounded-md object-cover" />
          <div class="flex-1">
            <h2 class="font-bold text-sm">Product title <span class="font-normal ml-2">Quantity <b>2</b></span></h2>
            <p class="text-sm text-gray-500">Description..</p>
            <p class="font-semibold mt-1">$200</p>
          </div>
        </div>
        <div class="flex items-center gap-4 mb-4">
          <img src="gold-necklace.jpeg" class="w-20 h-20 rounded-md object-cover" />
          <div class="flex-1">
            <h2 class="font-bold text-sm">Product title <span class="font-normal ml-2">Quantity <b>2</b></span></h2>
            <p class="text-sm text-gray-500">Description..</p>
            <p class="font-semibold mt-1">$200</p>
          </div>
        </div>
      </div>
      
      <!-- Updated right section -->
<div class="flex flex-col justify-between">
    <div class="mb-6">
      <div class="flex justify-between items-center mb-4">
        <p class="font-semibold text-gray-700">TOTAL</p>
        <p class="text-lg font-bold">$3,600</p>
      </div>
      <p class="block font-semibold mb-1">NAME</p>
      <p class="mb-4 px-4 py-2 border-2 border-gray-300 rounded-md bg-gray-100">Rajkumar Singh</p>
      <p class="block font-semibold mb-1">MOBILE</p>
      <p class="mb-4 px-4 py-2 border-2 border-gray-300 rounded-md bg-gray-100">+91-9876543210</p>
    </div>
    <div class="flex gap-4">
      <button class="w-1/2 py-3 bg-red-500 text-white font-semibold rounded-lg hover:bg-red-600 transition">CANCEL</button>
      <button class="w-1/2 py-3 bg-indigo-500 text-white font-semibold rounded-lg hover:bg-indigo-600 transition">CONFIRM</button>
    </div>
  </div>
  
</body>
</html>
