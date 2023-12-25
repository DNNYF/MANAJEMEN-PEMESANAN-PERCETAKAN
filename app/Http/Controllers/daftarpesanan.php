<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class daftarpesanan extends Controller
{
    public function index(){

        $pesanan=DB::table('daftarpemesanan')->get();

        return view ('daftarpesanan', compact('pesanan'));
    }

    public function updateStatus($id, Request $request)
    {
    $status = $request->input('status');
    
    DB::table('daftarpemesanan')
        ->where('id', $id)
        ->update(['STATUS' => $status]);

        return redirect()->back();
    }
}
