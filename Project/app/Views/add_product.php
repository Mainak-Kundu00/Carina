<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#bd5752] flex justify-center items-center min-h-screen">
  <div class="bg-[#b18a95] p-6 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-center text-2xl font-bold mb-6 text-gray-800">PRODUCT UPDATION</h2>

    <?= form_open_multipart('');?>
      <div class="flex flex-col gap-4">

        <label class="font-semibold text-gray-800">PRODUCT NAME:</label>
        <input type="text" name="product_name" value="<?= old('product_name') ?>" placeholder="Name" class="px-4 py-2 rounded outline-none">

        <label class="font-semibold text-gray-800">PRODUCT PRICE:</label>
        <input type="text" name="product_price" value="<?= old('product_price') ?>" placeholder="Price" class="px-4 py-2 rounded outline-none">

        <label class="font-semibold text-gray-800">PRODUCT IMAGE(MAX 40MB):</label>
        <span class="px-4 py-2 rounded bg-white">
          <?= form_upload(['name'=>'product_img']); ?>
        </span>

        <label class="font-semibold text-gray-800">PRODUCT CATEGORY:</label>
        <select class="px-4 py-2 rounded outline-none" name="product_category" value="<?= old('product_category') ?>">
          <?php 
            $gender=array("Ring","Necklace","Jewelry Set");
            foreach($gender as $g): ?>   
              <option><?= $g?></option>
          <?php endforeach?>
        </select>

        <label class="font-semibold text-gray-800">QUANTITY</label>
        <input type="text" name="quantity" value="<?= old('quantity') ?>" placeholder="100" class="px-4 py-2 rounded outline-none">

        <div style="color: red;">
          <?= validation_list_errors() ?>
        </div>
        
        <button type="submit"  class="bg-indigo-600 text-white rounded py-2 mt-4 hover:bg-indigo-700">ADD ITEM</button>
      </div>
    <?= form_close();?>
  </div>
</body>
</html>
