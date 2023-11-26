@extends('layout.main')

@section('title', 'Tambah Produk')

@section('main_content')
@extends('layout.nav')
@include('layout.sidebar')

<!-- Main content -->
<div class="mt-20 mx-4">
    <div class="sm:ml-64 border border-gray-200 shadow rounded-lg">
        <div class="w-full  bg-white p-8 rounded-lg  w-96">
            <h2 class="text-2xl font-semibold mb-4 text-center">Tambah Produk</h2>
            @if (Session::has('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <span class="font-medium">Info!</span> {{ Session::get('success') }}
            </div>
            @else

            @endif
            @if ($errors->any())
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                role="alert">
                <span class="font-medium">Kesalahan</span>
                <ul class="list-disc list-inside mt-2">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ url('products') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="nama_product" class="block text-gray-600">Nama Produk</label>
                    <input type="text" value="{{ old('nama_product', $data->nama_product) }}" name="nama_product"
                        class="w-full border border-gray-300 rounded-lg py-2 px-4" />
                </div>
                <div class="mb-4">
                    <label for="jenis" class="block text-gray-600">Jenis/Ukuran</label>
                    <input type="jenis" name="jenis" value="{{ $data->jenis }}"
                        class="w-full border border-gray-300 rounded-lg py-2 px-4" />
                </div>
                <div class="mb-4">
                    <label for="harga" class="block text-gray-600">Harga Produk</label>
                    <input type="harga" name="harga" value="{{ $data->harga }}"
                        class="w-full border border-gray-300 rounded-lg py-2 px-4" />
                </div>
                <div class="mb-4">
                    <label for="foto" class="block text-gray-600">Foto Produk</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        name="foto" value="{{ $data->foto }}" id="multiple_files" type="file">
                </div>

                <button type="input"
                    class="mt-5 w-full hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>
<!-- tabel -->
<div class="p-4 sm:ml-64">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg pt-2">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" >
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400" id="table">
                <tr>
                    <th scope="col" class="text-center px-2 py-3">
                        no
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Produk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Jenis/Ukuran
                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg></a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Foto
                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg></a>
                        </div>
                    </th>

                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Harga
                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg></a>
                        </div>
                    </th>
                    <th scope="col" class="px-2 py-3 text-center">
                        <span class="">Aksi</span>
                    </th>
                </tr>
            </thead>
            <tbody class="">
                @if ($data->isEmpty())
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="border border-gray-400 text-center" colspan="5">Tidak ada data</td>
                </tr>
            @else
                <?php $no = $data->firstItem() ?>
                @foreach ($data as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center dark:text-white">
                            {{ $no }}
                        </th>
                        <th scope="row" class="px-6 py-3">
                            {{ $item->nama_product }}
                        </th>
                        <td class="px-6 py-3">
                            {{ $item->jenis }}
                        </td>
                        <td class="px-6 py-3">
                            <img class="object-scale-down h-20 w-20" src="{{ Storage::url('public/imageApp/' . $item->foto) }}" alt="">
                        </td>
                        <td class="px-6 py-3">
                            {{ $item->harga }}
                        </td>
                        <td class="px-2 py-3 text-center">
                            <a href="{{ url('product/' . $item->id_product . '/edit') }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> |
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    @php $no++ @endphp
                @endforeach
            @endif
            
        </tbody>
        {{ $data->links() }}
    </table>
    </div>
</div>

@endsection
