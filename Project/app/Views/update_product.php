<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Product</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#bd7752] flex justify-center items-center min-h-screen px-4">
  <div class="bg-[#bd8448] p-6 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-center text-2xl font-bold mb-6 text-gray-800">PRODUCT UPDATION</h2>
    <?php 
      if(session()->getFlashdata('update_product') !== NULL):?>
        <span style="color: white;">
          <?= session()->getFlashdata('update_product');
          ?>
        </span>
    <?php endif?>
    <?= form_open('');?>
      <div class="flex flex-col gap-4">
        <label class="font-semibold text-gray-800">PRODUCT ID:</label>
        <input type="text"name="id" value="<?= old('id') ?>" placeholder="ID" class="px-4 py-2 rounded outline-none">

        <label class="font-semibold text-gray-800">PRODUCT PRICE:</label>
        <input type="text" name="product_price" value="<?= old('product_price') ?>" placeholder="Price" class="px-4 py-2 rounded outline-none">

        <label class="font-semibold text-gray-800">QUANTITY</label>
        <input type="text" name="quantity" value="<?= old('quantity') ?>" placeholder="100" class="px-4 py-2 rounded outline-none">

        <div style="color: red;">
          <?= validation_list_errors() ?>
        </div>

        <button type="submit" class="bg-indigo-600 text-white rounded py-2 mt-4 hover:bg-indigo-700">UPDATE</button>
      </div>
     <?= form_close();?>
  </div>
</body>
</html>
