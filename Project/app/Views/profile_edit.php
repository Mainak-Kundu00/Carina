<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Update Profile</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-r from-pink-200 to-green-200">
  <div class="bg-white shadow-xl rounded-xl w-full max-w-md m-4">
    
    <!-- Header -->
    <div class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white p-6 rounded-t-xl text-center">
      <h2 class="text-2xl font-bold">Update Profile</h2>
    </div>

    <!-- Form -->
    <form class="p-6 sm:p-8 bg-blue-50 rounded-b-xl space-y-5">
      <div>
        <label class="block text-sm font-semibold text-indigo-700 mb-1" for="name">Name</label>
        <input type="text" id="name" placeholder="Enter your name" class="w-full px-4 py-2 border border-indigo-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" />
      </div>

      <div>
        <label class="block text-sm font-semibold text-indigo-700 mb-1" for="gender">Gender</label>
        <select id="gender" class="w-full px-4 py-2 border border-indigo-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400">
          <option value="">Select</option>
          <option>Female</option>
          <option>Male</option>
          <option>Other</option>
        </select>
      </div>

      <div>
        <label class="block text-sm font-semibold text-indigo-700 mb-1" for="dob">D.O.B</label>
        <input type="date" id="dob" class="w-full px-4 py-2 border border-indigo-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" />
      </div>

      <div>
        <label class="block text-sm font-semibold text-indigo-700 mb-1" for="phone">Phone</label>
        <input type="tel" id="phone" placeholder="+91-" class="w-full px-4 py-2 border border-indigo-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" />
      </div>

      <div>
        <label class="block text-sm font-semibold text-indigo-700 mb-1" for="email">Email</label>
        <input type="email" id="email" placeholder="your@email.com" class="w-full px-4 py-2 border border-indigo-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" />
      </div>

      <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg transition">
        Update
      </button>
    </form>
  </div>

</body>
</html>
