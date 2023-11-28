<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\productModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = productModel::orderby('nama_product', 'desc')->paginate(5);
        return view('products.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama_product', $request->nama_product);
        Session::flash('jenis', $request->jenis);
        Session::flash('harga', $request->harga);
        Session::flash('id_product', $request->id_product);

        $request->validate([
            'nama_product' => 'required',
            'jenis' => 'required',
            'harga' => 'required|numeric',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:5120'
        ], [
            'nama_product.required' => 'Nama Produk Wajib Diisi.',
            'jenis.required' => 'Jenis/Ukuran Wajib Diisi.',
            'harga.required' => 'Harga Wajib Diisi.',
            'harga.numeric' => 'Harga Wajib Diisi Dengan Angka.',
            'foto.required' => 'Foto Wajib Diisi.',
            'foto.image' => 'Foto harus berupa gambar.',
            'foto.mimes' => 'Foto harus berformat .jpeg, .png, atau .jpg.',
            'foto.max' => 'Ukuran foto tidak boleh melebihi 5MB.'
        ]);



        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $ekstensi = $foto->getClientOriginalExtension();
            $namaFile = Str::random(10) . '.' . $ekstensi;
            Storage::putFileAs('public/imageApp', $foto, $namaFile);
        } else {

            return redirect()->back()->withErrors(['foto' => 'Foto tidak ditemukan.']);
        }


        $data = [
            'nama_product' => $request->nama_product,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'foto' => $namaFile,
        ];

        productModel::create($data);
        return redirect()->to('product')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $data = productModel::where('id_product', $id)->first();
        return view('products.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_product)
    {
        $request->validate([
            'nama_product' => 'required',
            'jenis' => 'required',
            'harga' => 'required|numeric',
            'foto' => 'image|mimes:jpeg,png,jpg|max:5120'
        ], [
            'nama_product.required' => 'Nama Produk Wajib Diisi.',
            'jenis.required' => 'Jenis/Ukuran Wajib Diisi.',
            'harga.required' => 'Harga Wajib Diisi.',
            'harga.numeric' => 'Harga Wajib Diisi Dengan Angka.',
            'foto.image' => 'Foto harus berupa gambar.',
            'foto.mimes' => 'Foto harus berformat .jpeg, .png, atau .jpg.',
            'foto.max' => 'Ukuran foto tidak boleh melebihi 5MB.'
        ]);

        $product = productModel::findOrFail($id_product);

        $product->nama_product = $request->nama_product;
        $product->jenis = $request->jenis;
        $product->harga = $request->harga;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $ekstensi = $foto->getClientOriginalExtension();
            $namaFile = Str::random(10) . '.' . $ekstensi;
            Storage::putFileAs('public/imageApp', $foto, $namaFile);
            $product->foto = $namaFile;
        }

        $product->save();


        return redirect()->route('product.index')->with('success', 'Data Produk berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        productModel::where('id_product', $id)->delete();
        return redirect()->route('product.index')->with('success', 'Sukses Menghapus Data');
    }
}
