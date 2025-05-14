
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-pink-200 to-green-200 flex justify-center items-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <div class="flex justify-center mb-4">
            <?php
            $imageProperties = [
                'src'    => 'logo.jpg',
                'alt'    => 'Carina',
                'width'  => '150'
            ];
            echo img($imageProperties);?>
        </div>
            <!-- account Created -->
            <?php 
            if(session()->getFlashdata('account_create') !== NULL):?>
            <span style="color: green; background-color: #c1c3c7">
                <?= session()->getFlashdata('account_create');
                ?>
            </span>
            <?php endif?>
            <?php  
            if(session()->getFlashdata('account_create_failed') !== NULL):?>
            <div style="color: red; background-color: #c1c3c7">
                <?= session()->getFlashdata('account_create_failed'); ?>
            </div>
            <br>
            <?php endif?>
        <?= form_open('');?>
            <div class="space-y-4">
                <div class="relative">
                    <span class="absolute left-3 top-3 text-gray-400">👤</span>
                    <input type="text" name="name" value="<?= old('name') ?>" placeholder="Full Name" class="w-full px-10 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div class="relative">
                    <span class="absolute left-3 top-3 text-gray-400">⚤</span>
                    <select name="gender" value="<?= old('gemder') ?>" class="w-full px-10 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                     <?php 
                     $gender=array("Male","Female","Other");
                     foreach($gender as $g): ?>   
                        <option><?= $g?></option>
                        <?php endforeach?>
                    </select>
                </div>

                <!-- Date of Birth Section -->
                <div class="relative flex items-center border rounded-md px-4 py-2 bg-gray-100">
                    <span class="text-gray-400 mr-2">📅</span>
                    <label class="text-gray-500 mr-2">Date of Birth:</label>
                    <input type="date" name="dob" value="<?= old('dob') ?>" class="flex-1 bg-transparent focus:outline-none cursor-pointer">
                </div>

                <div class="relative">
                    <span class="absolute left-3 top-3 text-gray-400">📍</span>
                    <input type="text" name="address" value="<?= old('address') ?>" placeholder="Address" class="w-full px-10 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div class="relative">
                    <span class="absolute left-3 top-3 text-gray-400">📧</span>
                    <input type="email" name="email" value="<?= old('email') ?>" placeholder="Email" class="w-full px-10 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div class="relative">
                    <span class="absolute left-3 top-3 text-gray-400">📞</span>
                    <input type="tel" name="ph_no" value="<?= old('ph_no') ?>" placeholder="Phone Number" class="w-full px-10 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div class="relative">
                    <span class="absolute left-3 top-3 text-gray-400">🔒</span>
                    <input type="password" name="password" value="<?= old('password') ?>" placeholder="Password" id="password" class="w-full px-10 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <button type="button" onclick="togglePassword('password', 'toggleIcon1')" class="absolute right-3 top-2 text-gray-500">
                        <span id="toggleIcon1">🙈</span>
                    </button>
                </div>
                
                <div class="relative">
                    <span class="absolute left-3 top-3 text-gray-400">🔐</span>
                    <input type="password" name="Confirm_password" value="<?= old('Confirm_password') ?>" placeholder="Confirm password" id="confirmPassword" class="w-full px-10 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <button type="button" onclick="togglePassword('confirmPassword', 'toggleIcon2')" class="absolute right-3 top-2 text-gray-500">
                        <span id="toggleIcon2">🙈</span>
                    </button>
                </div>

                <div style="color: red;">
                <?= validation_list_errors() ?>
                </div>

                <div class="flex items-center">
                 <input type="checkbox" id="terms" class="mr-2" required>
                 <label for="terms" class="text-sm text-gray-600">I agree with <a href="<?= base_url('terms'); ?>" class="text-blue-500 text-sm">Terms & Conditions</a></label>
                </div>

                <button class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">Sign Up</button>

                <p class="text-center text-sm text-gray-600 mt-2">
                    Already have an account? <a href="<?= base_url('sign_in'); ?>" class="text-blue-500">Sign in</a>
                </p>
            </div>
        <?= form_close();?>
        
    </div>

    <script>
        function togglePassword(id) {
            var input = document.getElementById(id);
            input.type = input.type === "password" ? "text" : "password";
        }

        function togglePassword(inputId, iconId) {
        var input = document.getElementById(inputId);
        var icon = document.getElementById(iconId);

        if (input.type === "password") {
            input.type = "text";
            icon.innerText = "👁"; // Open Eye
        } else {
            input.type = "password";
            icon.innerText = "🙈"; // Closed Eye
        }
    }

    </script>

</body>
</html>
