<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-pink-200 to-green-200 flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
        <div class="flex justify-center mb-4">
            <?php $imageProperties = [
                    'src'    => 'logo.jpg',
                    'alt'    => 'Carina',
                    'width'  => '140'
                ];
                echo img($imageProperties);?>        
        </div>
        
        <h2 class="text-center text-2xl font-semibold mb-4">Welcome back 👋</h2>

        <?= form_open('');?>
            <div class="space-y-4">
                <div class="relative">
                    <label class="block text-gray-600 font-medium">Email</label>
                    <input type="email" name="email" value="<?= old('email') ?>" placeholder="Enter your email" class="w-full px-10 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <span class="absolute left-3 top-10 text-gray-400">✉️</span>
                </div>

                <div class="relative">
                    <label class="block text-gray-600 font-medium">Password</label>
                    <input type="password" id="password" name="password" value="<?= old('password') ?>" placeholder="Enter your password" class="w-full px-10 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <span class="absolute left-3 top-10 text-gray-400">🔒</span>
                    <button type="button" onclick="togglePassword()" class="absolute right-3 top-10 text-gray-500">👁️</button>
                </div>

                <!-- <div class="text-right">
                    <a href="#" class="text-blue-500 text-sm">Forgot password?</a>
                </div> -->
                
                <div style="color: red;">
                <?= validation_list_errors() ?>
                <?php if(session()->getFlashdata('no_user') !== NULL){
                    echo session()->getFlashdata('no_user');
                }?>

                </div>
                
                <button class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">Log in</button>

                <p class="text-center text-sm text-gray-600 mt-2">
                    Not a member yet? <a href="<?= base_url('sign_up'); ?>" class="text-blue-500">Create account now</a>
                </p>
            </div>
        <?= form_close()?>
        
    </div>

    <script>
        function togglePassword() {
            var input = document.getElementById("password");
            if (input.type === "password") {
                input.type = "text";
                event.target.textContent = "👁";
            } else {
                input.type = "password";
                event.target.textContent = "👁️‍🗨️";
            }
        }
    </script>
</body>
</html>
