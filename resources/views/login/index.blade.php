@extends('layout.main')

@section('title','login')

@section('main_content')

<body class="bg-gray-100 flex justify-center items-center h-screen">
  <div class="bg-white p-8 rounded-lg shadow-md w-96">
    <h2 class="text-2xl font-semibold mb-4">Login</h2>
    <form method="post" action="">
      @csrf
      @method('GET')
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
        Login
      </button>
    </form>
    <p class="text-gray-600 mt-4 text-center">
      Belum punya akun?
      <a href="/register" class="text-yellow-700 hover:underline">Daftar Sekarang</a>
    </p>
  </div>
</body>
@endsection