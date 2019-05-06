<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryStore;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(){
        return view('category.create');
    }
    public function create(CategoryStore $request){
        $category = new Category();
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();
        return redirect()->route('admin.list');
    }
}
