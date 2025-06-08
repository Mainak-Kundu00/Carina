<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col justify-between">

  <!-- Profile Card -->
  <div class="max-w-xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md w-[90%] sm:w-[80%] lg:w-[60%]">
    <!-- Header -->
    <div class="flex justify-between items-center flex-wrap gap-2">
      <?php
            $imageProperties = [
                'src'    => 'logo.jpg',
                'alt'    => 'Carina',
                'width'  => '90'
            ];
            echo img($imageProperties);?>  
      <div class="flex gap-2">
        <a href="<?= base_url('profile_edit');?>">
          <button class="bg-yellow-100 text-yellow-800 px-4 py-1 rounded-md text-sm hover:bg-yellow-200 whitespace-nowrap">
            ✎ Edit
          </button>
        </a>
        <a href="<?= base_url('user_logout');?>"> 
          <button class="bg-red-100 text-red-700 px-4 py-1 rounded-md text-sm hover:bg-red-200 whitespace-nowrap">
            ⎋ Logout
          </button>
        </a>
      </div>
    </div>

    <!-- Profile Image / Initial -->
    <div class="mt-6 flex justify-center">
      <div class="relative w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40 lg:w-48 lg:h-48 rounded-full bg-yellow-400 flex items-center justify-center text-4xl font-semibold text-gray-800">
        <img id="profileImg" src="" alt="Profile" class="w-full h-full rounded-full object-cover hidden" />
        <span id="profileInitial" class="absolute text-3xl sm:text-4xl md:text-5xl lg:text-6xl"></span>
      </div>
    </div>

    <hr class="my-6" />

    <!-- Profile Info -->
    <div class="space-y-4 text-sm sm:text-base">
      <div>
        <?php foreach($user_data as $user):?>
        <p class="font-medium text-gray-600">Name:</p>
        <p class="font-bold" id="name"><?= $user['name']; ?></p>
      </div>
      <div>
        <p class="font-medium text-gray-600">Gender:</p>
        <p class="font-bold"><?= $user['gender']; ?></p>
      </div>
      <div>
        <p class="font-medium text-gray-600">D.O.B:</p>
        <p class="font-bold"><?= $user['dob']; ?></p>
      </div>
      <div>
        <p class="font-medium text-gray-600">Phone:</p>
        <p class="font-bold"><?= $user['ph_no']; ?></p>
      </div>
      <div>
        <p class="font-medium text-gray-600">Email:</p>
        <p class="font-bold"><?= $user['email']; ?></p>
      </div>
      <div>
        <p class="font-medium text-gray-600">Address:</p>
        <p class="font-bold"><?= $user['address']; ?></p>
      </div>
      <?php endforeach ?>
    </div>
  </div>

  <!-- JS to handle profile photo/initial -->
  <script>
    const profileImg = document.getElementById("profileImg");
    const profileInitial = document.getElementById("profileInitial");
    const nameElement = document.getElementById("name");
    
    const name = nameElement.textContent.trim();
    const profileImageUrl = ""; // If image exists, place URL here

    if (profileImageUrl) {
      profileImg.src = profileImageUrl;
      profileImg.classList.remove("hidden");
      profileInitial.classList.add("hidden");
    } else {
      const firstInitial = name.charAt(0).toUpperCase();
      profileInitial.textContent = firstInitial;
      profileImg.classList.add("hidden");
      profileInitial.classList.remove("hidden");
    }
  </script>
</body>
</html>
