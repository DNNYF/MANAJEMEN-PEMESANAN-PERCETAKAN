<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\productController;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        return view('payment');
    }

    public function checkout(Request $request){
       
       $request ->request->add(['total' ->$request->qyt * ]);
    }
}
