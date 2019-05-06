<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryStore;
use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function list(){
        $list = Product::paginate('3');
        return view('admin.admin', compact('list'));
    }
    public function store(){
        $cate = Category::all();
        return view('admin.create', compact('cate'));
    }
    public function create(Request $request){
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
}
