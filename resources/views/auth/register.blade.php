<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>register</title>
    <!-- Tambahkan link ke CDN Tailwind CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />
  </head>
  <body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
      <h2 class="text-2xl font-semibold mb-4">Register</h2>
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-4">
          <label for="name" class="block text-gray-600">nama*</label>
          <input
            type="text"
            id="name"
            name="name"
            class="w-full border border-gray-300 rounded-lg py-2 px-4"
          />
        </div>
        <div class="mb-4">
          <label for="email" class="block text-gray-600">Email addres*</label>
          <input
            type="email"
            id="email"
            name="email"
            class="w-full border border-gray-300 rounded-lg py-2 px-4"
          />
        </div>
        <div class="mb-4">
          <label for="password" class="block text-gray-600">Password*</label>
          <input
            type="password"
            id="password"
            name="password"
            class="w-full border border-gray-300 rounded-lg py-2 px-4"
          />
        </div>
        <div class="mb-4">
          <label for="password-confirm" class="block text-gray-600">konfirmasi Password*</label>
          <input
            type="password"
            id="password-confirm"
            name="password_confirmation"
            class="w-full border border-gray-300 rounded-lg py-2 px-4"
          />
        </div>
        
        <button
          type="submit"
          class="bg-yellow-800 hover:bg-yellow-900 text-white rounded-lg py-2 px-4 w-full"
          a href="/market">
          Register
        </button>
      </form>
      <p class="text-gray-600 mt-4 text-center">
        Sudah punya akun?
        <a href="/login" class="text-yellow-800 hover:underline">Login Sekarang</a>
      </p>
    </div>
  </body>
</html>
