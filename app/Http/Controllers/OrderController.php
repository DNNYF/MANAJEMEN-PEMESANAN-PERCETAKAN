<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        return view('payment');
    }

    public function checkout(Request $request){
        $order = Order::create($request->all());

    }
}
