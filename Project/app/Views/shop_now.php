<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Shop Now</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script type="module">
    import { createIcons, icons } from "https://cdn.skypack.dev/lucide";
    window.onload = () => createIcons({ icons });
  </script>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-6">
  <div class="w-full max-w-5xl">
    <h1 class="text-4xl font-bold text-center mb-10 text-gray-800">Shop Categories</h1>
    <div class="flex flex-col md:flex-row gap-6">

      <a href="<?= base_url('rings'); ?>" class="flex-1">
        <button class="w-full bg-indigo-600 text-white py-12 rounded-2xl text-2xl font-medium shadow-md hover:bg-indigo-700 transition flex flex-col items-center gap-3">
          <i data-lucide="diamond" class="w-10 h-10"></i>
          Rings
        </button>
      </a>

      <a href="<?= base_url('necklaces'); ?>" class="flex-1">
        <button class="w-full bg-indigo-600 text-white py-12 rounded-2xl text-2xl font-medium shadow-md hover:bg-indigo-700 transition flex flex-col items-center gap-3">
          <i data-lucide="link" class="w-10 h-10"></i>
          Necklaces
        </button>
      </a>

      <a href="<?= base_url('jewelry'); ?>" class="flex-1">
        <button class="w-full bg-indigo-600 text-white py-12 rounded-2xl text-2xl font-medium shadow-md hover:bg-indigo-700 transition flex flex-col items-center gap-3">
          <i data-lucide="gem" class="w-10 h-10"></i>
          Jewelry Set
        </button>
      </a>

    </div>
  </div>

  <script type="module">
    import { createIcons, icons } from "https://cdn.skypack.dev/lucide";
    createIcons({ icons });
  </script>
</body>
</html>
