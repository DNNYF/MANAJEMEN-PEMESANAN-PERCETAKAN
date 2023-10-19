<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page</title>
  <!-- Tambahkan link ke CDN Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
  <div class="bg-white p-8 rounded-lg shadow-md w-96">
    <h2 class="text-2xl font-semibold mb-4">Login</h2>
    <form method="post" action="/payment">
      <div class="mb-4">
        <label for="username" class="block text-gray-600">Username</label>
        <input type="text" id="username" name="username" class="w-full border border-gray-300 rounded-lg py-2 px-4" />
      </div>
      <div class="mb-4">
        <label for="password" class="block text-gray-600">Password</label>
        <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-lg py-2 px-4" />
      </div>
      <div class="flex justify-between items-center mb-4">
        <a href="#" class="text-yellow-800 hover:underline">Lupa Password?</a>
      </div>
      <button type="submit" class="bg-yellow-800 hover:bg-yellow-900 text-white rounded-lg py-2 px-4 w-full">
        <a href="/payment">
        Login
      </a>
      </button>
    </form>
    <p class="text-gray-600 mt-4 text-center">
      Belum punya akun?
      <a href="#" class="text-yellow-700 hover:underline">Daftar Sekarang</a>
    </p>
  </div>
</body>

</html>