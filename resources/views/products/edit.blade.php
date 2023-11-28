@extends('layout.main')

@section('title', 'Edit Produk')

@section('main_content')
@extends('layout.nav')
@include('layout.sidebar')

<div class="mt-20 mx-4">
    <div class="sm:ml-64 border border-gray-200 shadow rounded-lg">
        <div class="w-full  bg-white p-8 rounded-lg  w-96">
            <h2 class="text-2xl font-semibold mb-4 text-center">Edit Produk</h2>

            @if ($errors->any())
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <span class="font-medium">Kesalahan</span>
                <ul class="list-disc list-inside mt-2">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ url('product/'.$data->id_product) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="nama_product" class="block text-gray-600">Nama Produk</label>
                    <input type="text" value="{{ $data->nama_product }}" name="nama_product"
                        class="w-full border border-gray-300 rounded-lg py-2 px-4" />
                </div>
                <div class="mb-4">
                    <label for="jenis" class="block text-gray-600">Jenis/Ukuran</label>
                    <input type="text" name="jenis" value="{{ $data->jenis }}"
                        class="w-full border border-gray-300 rounded-lg py-2 px-4" />
                </div>
                <div class="mb-4">
                    <label for="harga" class="block text-gray-600">Harga Produk</label>
                    <input type="text" name="harga" value="{{ $data->harga }}"
                        class="w-full border border-gray-300 rounded-lg py-2 px-4" />
                </div>
                <div class="mb-4">
                    <label for="foto" class="block text-gray-600">Foto Produk</label>
                    <p class="block text-gray-400">*Kosongkan "Foto Produk" Apabila Tidak Ingin Mengubah Foto</p>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        name="foto" id="multiple_files" type="file" >
                </div>

                <button type="submit" class="mt-5 w-full hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                    Update
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
