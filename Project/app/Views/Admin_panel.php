<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Panel</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- Header -->
      <div class="flex justify-between items-center   flex-wrap gap-2 py-4 px-4">
        <?php
              $imageProperties = [
                  'src'    => 'logo.jpg',
                  'alt'    => 'Carina',
                  'width'  => '90'
              ];
              echo img($imageProperties);?>  
        <div class="flex gap-2">

          <a href="<?= base_url('logout');?>">
          <button class="bg-red-100 text-red-700 px-4 py-1 rounded-md text-sm hover:bg-red-200 whitespace-nowrap">
            ⎋ Logout
          </button>
          </a>
        </div>
      </div>

  <div class="bg-white min-h-screen flex flex-col items-center p-4">

    <h1 class="text-3xl font-bold text-center mb-8">Admin Panel</h1>

    <!-- Buttons -->
    <div class="flex flex-wrap justify-center gap-4 mb-10">
      <a href="<?= base_url('add_product');?>">
        <button class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 transition">Add Item</button>
      </a>
      <a href="<?= base_url('delete_product');?>">
        <button class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 transition">Delete Item</button>
      </a>
      <a href="<?= base_url('update_product');?>">
        <button class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 transition">Update Item</button>
      </a>
      <!-- <a href="<?= base_url('ordered_product');?>">
        <button class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 transition">Orders</button>
      </a> -->
    </div>
    

    <!-- Product Table -->
    <h2 class="text-2xl font-bold mb-6 text-center">Product Database</h2>
    <div class="w-full overflow-x-auto">
      <table class="w-full border border-gray-300 text-sm sm:text-base text-center">
        <thead>
          <tr class="bg-gray-100 text-gray-700">
            <th class="py-3 px-4 border border-gray-300">SL No.</th>
            <th class="py-3 px-4 border border-gray-300">ID</th>
            <th class="py-3 px-4 border border-gray-300">Product image</th>
            <th class="py-3 px-4 border border-gray-300">Product name</th>
            <th class="py-3 px-4 border border-gray-300">Quantity</th>
            <th class="py-3 px-4 border border-gray-300">Category</th>
            <th class="py-3 px-4 border border-gray-300">Price</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">
          <?php $count=1;
          foreach($products as $item):?>
          <tr>
            <td class="py-4 px-4 border border-gray-300"><?= $count++;?></td>
            <td class="py-4 px-4 border border-gray-300"><?= $item['id'];?></td>
            <td class="py-4 px-4 border border-gray-300">
              <div class="flex justify-center items-center">
              <img src="<?= base_url("uploads/".$item['product_img']); ?>" alt="Product" class="w-16 h-16 object-cover">
            </div>
            </td>
            <td class="py-4 px-4 border border-gray-300"><?= $item['product_name'];?></td>
            <td class="py-4 px-4 border border-gray-300 font-bold"><?= $item['quantity'];?></td>
            <td class="py-4 px-4 border border-gray-300"><?= $item['product_category'];?></td>
            <td class="py-4 px-4 border border-gray-300"><?= $item['product_price'];?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

  </div>
</body>

</html>
