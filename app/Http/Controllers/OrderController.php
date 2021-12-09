<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('pages.orders.index')
                ->with(['products' => $products]);
    }
}
