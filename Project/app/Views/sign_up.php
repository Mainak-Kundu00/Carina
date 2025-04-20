
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
            <img src="logo.jpg" alt="Logo" class="h-12">
        </div>

        <form>
            <div class="space-y-4">
                <div class="relative">
                    <span class="absolute left-3 top-3 text-gray-400">👤</span>
                    <input type="text" placeholder="Full Name" class="w-full px-10 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div class="relative">
                    <span class="absolute left-3 top-3 text-gray-400">⚤</span>
                    <select class="w-full px-10 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>

                <!-- Date of Birth Section -->
                <div class="relative flex items-center border rounded-md px-4 py-2 bg-gray-100">
                    <span class="text-gray-400 mr-2">📅</span>
                    <label class="text-gray-500 mr-2">Date of Birth:</label>
                    <input type="date" class="flex-1 bg-transparent focus:outline-none cursor-pointer">
                </div>

                <div class="relative">
                    <span class="absolute left-3 top-3 text-gray-400">📍</span>
                    <input type="text" placeholder="Address" class="w-full px-10 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div class="relative">
                    <span class="absolute left-3 top-3 text-gray-400">📧</span>
                    <input type="email" placeholder="Email" class="w-full px-10 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div class="relative">
                    <span class="absolute left-3 top-3 text-gray-400">📞</span>
                    <input type="tel" placeholder="Phone Number" class="w-full px-10 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div class="relative">
                    <span class="absolute left-3 top-3 text-gray-400">🔒</span>
                    <input type="password" placeholder="Password" id="password" class="w-full px-10 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <button type="button" onclick="togglePassword('password', 'toggleIcon1')" class="absolute right-3 top-2 text-gray-500">
                        <span id="toggleIcon1">🙈</span>
                    </button>
                </div>
                
                <div class="relative">
                    <span class="absolute left-3 top-3 text-gray-400">🔐</span>
                    <input type="password" placeholder="Confirm Password" id="confirmPassword" class="w-full px-10 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <button type="button" onclick="togglePassword('confirmPassword', 'toggleIcon2')" class="absolute right-3 top-2 text-gray-500">
                        <span id="toggleIcon2">🙈</span>
                    </button>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="terms" class="mr-2">
                    <label for="terms" class="text-sm text-gray-600">I agree with Terms & Conditions</label>
                </div>

                <button class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">Sign Up</button>

                <p class="text-center text-sm text-gray-600 mt-2">
                    Already have an account? <a href="sign-in.html" class="text-blue-500">Sign in</a>
                </p>
            </div>
        </form>
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
