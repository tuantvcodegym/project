<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function getAll(){
        $product = Product::paginate('3');
        return view('home.index', compact('product'));
    }
}
