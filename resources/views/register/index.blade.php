@extends('layout.main')

@section('title','Registrasi')

@section('main_content')

  <body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
      <h2 class="text-2xl font-semibold mb-4">Register</h2>
      <form action="" method="post">
        @csrf
        @method('GET')
        <div class="mb-4">
          <label for="username" class="block text-gray-600">Email*</label>
          <input
            type="text"
            name="email"
            class="w-full border border-gray-300 rounded-lg py-2 px-4"
          />
        </div>
        <div class="mb-4">
          <label for="password" class="block text-gray-600">Password*</label>
          <input
            type="password"
            name="password"
            class="w-full border border-gray-300 rounded-lg py-2 px-4"
          />
        </div>
        <div class="mb-4">
          <label for="password" class="block text-gray-600">konfirmasi Password*</label>
          <input
            type="password"
            id="password"
            name="password"
            class="w-full border border-gray-300 rounded-lg py-2 px-4"
          />
        </div>
        
        <button
          type="submit"
          class="bg-yellow-800 hover:bg-yellow-900 text-white rounded-lg py-2 px-4 w-full"
        >
          Register
        </button>
      </form>
      <p class="text-gray-600 mt-4 text-center">
        Sudah punya akun?
        <a href="/login" class="text-yellow-800 hover:underline">Login Sekarang</a>
      </p>
    </div>
  </body>
  @endsection
