<?php

namespace App\Http\Controllers;

use App\Category;
use App\Customer;
use App\Http\Requests\AdminCreate;
use App\Http\Requests\CategoryStore;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function list(){
        // neu role bang 1 thi moi duoc vao trang admin
        if(Auth::user()->role == '1'){
            $list = Product::paginate('8');
            return view('admin.admin', compact('list'));
        }else{
            echo "<div style='width: 500px; margin: auto; position: absolute; top: 35%; left: 35%'><h1>403 : Bạn không có quyền truy cập vào trang này</h1> <button onclick='window.history.go(-1); return false;'>Back</button></div>";
        }
    }
    public function store(){
        $cate = Category::all();
        return view('admin.create', compact('cate'));
    }
    public function create(AdminCreate $request){
        $product = new Product();
        $product->name = $request->input('name');
        $product->thong_tin = $request->input('thong_tin');
        $product->address = $request->input('address');
        $product->bathroom = $request->input('bathroom');
        $product->bedroom = $request->input('bedroom');
        $product->price = $request->input('price');
        $product->status = $request->input('status');
        $product->category_id = $request->input('category_id');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $path = $image->store('image', 'public');
            $product->image = $path;
        }
        $product->save();
        return redirect()->route('admin.list');
    }
    public function edit($id){
        $product = Product::find($id);
        return view('admin.edit', compact('product', 'id'));
    }
    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->thong_tin = $request->input('text');
        $product->address = $request->input('address');
        $product->bathroom = $request->input('bathroom');
        $product->bedroom = $request->input('bedroom');
        $product->price = $request->input('price');
        $product->status = $request->input('status');
        if($request->hasFile('file')){
            $image = $request->file('file');
            $path = $image->store('image', 'public');
            $product->image = $path;
        }
        $product->save();
        return redirect()->route('admin.list');
    }
    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.list');
    }
    public function detail($id){
        $product = Product::find($id);
        $customer = Customer::where('product_id', $id)->get();
        return view('admin.detail', compact('product','customer'));
    }
    public function customer(){
        $customer = Customer::all();
        return view('admin.customer', compact('customer'));
    }
    public function aboutUs(){
        $cate = Category::all();
        return view('home.aboutus', compact('cate'));
    }
}
