<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getProfile($id){
        $customer = Customer::where('user_id', $id)->get();
        return view('product.detailCusTomer', compact('customer'));
    }
    public function cancelBathroom($id){
        $product = Product::find($id);
        $customer = Customer::where('product_id', $id);
        $customer->delete();
        $product->status = 'false';
        $product->save();
        return redirect()->route('index');
    }
}
