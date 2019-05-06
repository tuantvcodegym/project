<?php

namespace App\Http\Controllers;

use App\Category;
use App\Customer;
use App\Image;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function getAll(){
        $product = Product::paginate('6');
        $cate = Category::all();;
        return view('home.index', compact('product', 'cate'));
    }
    public function search(Request $request){
        $product = Product::where('name','like', '%'.$request->input('search').'%')->orwhere('address', $request->input('search'))->get();
        return view('product.list', compact('product'));
    }
    public function getCategories($id){
        $product = Product::where('category_id', $id)->get();
        return view('category.product', compact('product'));
    }
    public function detail($id){
        $product = Product::find($id);
        $images = Image::where('product_id', $id)->paginate('4');
        return view('product.detail', compact('product', 'images'));
    }
    public function searchCustomer(Request $request){
        $product = Product::where([['address', 'like', '%'.$request->input('address').'%'], ['bathroom', $request->input('bathroom')], ['bedroom', $request->input('bedroom')],['price','<=', $request->input('price-2')],['price','>=', $request->input('price')]])->get();
        return view('product.customerSearch', compact('product'));
    }
    public function getThueNha($id){
        $product = Product::all();
        return view('home.formThueNha', compact('id', 'product'));
    }
    public function postThueNha(Request $request, $id){
        $customer = new Customer();
        $user = User::where('email', $request->input('email'))->get();
        $product = Product::find($id);
        $product->status = 'true';
        foreach ($user as $value){
            $customer->name = $value->name;
            $customer->email = $value->email;
            $customer->phone = $value->phone;
            $customer->address = $value->address;
            $customer->user_id = $value->id;
        }
        $customer->bathroom = $product->bathroom;
        $customer->bedroom = $product->bedroom;
        $customer->price = $product->price;
        $customer->name_house = $product->name;
        $customer->product_id = $product->id;
        $customer->check_in = $request->input('check-in');
        $customer->check_out = $request->input('check-out');
        $customer->save();
        $product->save();
        return redirect()->route('index');
    }
}
