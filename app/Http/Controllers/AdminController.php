<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function list(){
        $list = Product::paginate('3');
        return view('admin.admin', compact('list'));
    }
    public function store(){
        return view('admin.create');
    }
    public function create(Request $request){
        $product = new Product();
        $product->name = $request->input('name');
        $product->thong_tin = $request->input('thong_tin');
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
    public function update($id , Request $request){
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->thong_tin = $request->input('text');
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
