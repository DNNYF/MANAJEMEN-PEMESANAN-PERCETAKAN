<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\adminModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class tambahadmin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = adminModel::orderby('nama_admin')->paginate(5);
        return view('tambahadmin')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama_admin', $request->nama_admin);
        Session::flash('no_hp', $request->no_hp);
        Session::flash('email', $request->email);
        Session::flash('password', $request->password);
        Session::flash('masukan_ulang_password', $request->masukan_ulang_password);

        $request->validate([
            'nama_admin' => 'required',
            'no_hp' => 'required|numeric',
            'email' => 'required',
            'password' => 'required',
            'masukan_ulang_password' => 'required'
        ], [
            'nama_admin.required' => 'Nama Wajib Diisi.',
            'no_hp.numeric' => 'No HP Wajib Diisi Dengan Angka.',
            'email.required' => 'Email Wajib Diisi.',
            'password.required' => 'Password Wajib Diisi.',
            'masukan_ulang_password.required' => 'Password Wajib Diisi.',
        ]);



        $data = [
            'nama_admin' => $request->nama_admin,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'password' => $request->password,
            'masukan_ulang_password' => $request->masukan_ulang_password,
        ];

        adminModel::create($data);
        return redirect()->to('tambahadmin')->with('success', 'Berhasil Menambahkan Data');
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

        $data = adminModel::where('id_admin', $id)->first();
        return view('admin.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_admin)
    {
        $request->validate([
            'nama' => 'required',
            'no_hp' => 'required|numeric',
            'email' => 'required',
            'password' => 'password'
        ], [
            'nama.required' => 'Nama Wajib Diisi.',
            'no_hp.numeric' => 'No Hp Wajib Diisi Dengan Angka.',
            'email.required' => 'Email Wajib Diisi.',
            'password.required' => 'Password Wajib Diisi.',
            'masukan_ulang_password.required' => 'Password Wajib Diisi.',
        ]);

        $admin = adminModel::findOrFail($id_admin);

        $admin->nama = $request->nama;
        $admin->no_hp = $request->no_hp;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $admin->masukan_ulang_password = $request->password;

        

        $admin->save();


        return redirect()->route('admin.index')->with('success', 'Data Admin berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        adminModel::where('id_admin', $id)->delete();
        return redirect()->route('admin.index')->with('success', 'Sukses Menghapus Data');
    }
}
