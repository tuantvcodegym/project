<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Product;
use App\User;
use Carbon\Traits\Date;
use DateTime;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getProfile($id){
        $user = User::find($id);
        $customer = Customer::where('user_id', $id)->get();
        return view('product.detailCusTomer', compact('customer','date','user'));
    }
    public function cancelBathroom($id){
        $product = Product::find($id);
        $customer = Customer::where('product_id', $id);
        $customer->delete();
        $product->status = 'false';
        $product->save();
        return redirect()->route('index');
    }
    public function profile($id){
        $user = User::find($id);
        return view('user.profile', compact('user'));
    }
    public function updateProfile(Request $request,$id){
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->save();
        return redirect()->route('index');
    }
}
