<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quantity Adjustment</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#BB3E00] flex justify-center items-center min-h-screen px-4">
  <div class="bg-[#E55050] p-6 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-center text-2xl font-bold mb-6 text-gray-800">Quantity Adjustment</h2>
    
    <?php  
      if(session()->getFlashdata('Out_of_stock') !== NULL):?>
        <span style="color: #c1c3c7;">
          <?= session()->getFlashdata('Out_of_stock'); ?>
        </span>
          <br>
    <?php endif?>

    <?php  
      if(session()->getFlashdata('Error') !== NULL):?>
        <span style="color: #c1c3c7;">
          <?= session()->getFlashdata('Error'); ?>
        </span>
          <br>
    <?php endif?>

  <?= form_open('');?>    
  <?= form_hidden('product_id',$data['product_id']); ?>
  <?= form_hidden('user_id',session()->get('user_id')); ?>
    <div class="flex flex-col gap-4">
        <label class="font-semibold text-gray-800">QUANTITY</label>
        <input type="text" name="quantity" value="<?= old('quantity');?>" placeholder="Quantity" class="px-4 py-2 rounded outline-none">

        <div style="color: white;">
          <?= validation_list_errors() ?>
        </div>

        <button type="submit" class="bg-indigo-600 text-white rounded py-2 mt-4 hover:bg-indigo-700">Confirm</button>
      </div>
  <?= form_close();?>    
  </div>
</body>
</html>
