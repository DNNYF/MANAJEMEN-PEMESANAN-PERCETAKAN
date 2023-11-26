@extends('layout.main')
@extends('layout.sidebar')
@extends('layout.nav')

<div class="mt-20 sm:ml-64 border border-gray-200 shadow rounded-lg">
    <div class="w-full  bg-white p-8 rounded-lg w-96">
        <h2 class="text-2xl font-semibold mb-4 text-center">Tambah Produk</h2>
        <form meth  od="POST" action='{{ url('Product') }}'>
            @csrf
            <div class="mb-4">
                <label for="nama_produk" class="block text-gray-600">Nama Produk</label>
                <input type="text" name="nama_produk" class="w-full border border-gray-300 rounded-lg py-2 px-4" />
            </div>
            <div class="mb-4">
                <label for="jenis" class="block text-gray-600">Jenis/Ukuran</label>
                <input type="jenis" name="jenis" class="w-full border border-gray-300 rounded-lg py-2 px-4" />
            </div>
            <div class="mb-4">
                <label for="harga_produk" class="block text-gray-600">Harga Produk</label>
                <input type="harga_produk" name="harga" class="w-full border border-gray-300 rounded-lg py-2 px-4" />
            </div>
            <div class="mb-4">
                <label for="foto_produk" class="block text-gray-600">Foto Produk</label>
            </div>
            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                            <span class="font-semibold">Click to upload</span> or drag and
                            drop
                        </p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">
                            PNG Atau JPG (MAX. 800x400px)
                        </p>
                    </div>
                    <input id="dropzone-file" type="file" name="foto" class="hidden" />
                </label>
            </div>
            <button type="submit" class="mt-5 w-full hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                Submit
            </button>
        </form>
    </div>
</div>

    
