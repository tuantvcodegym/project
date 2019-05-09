<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function comment(Request $request, $id){
        $comment = new Comment();
        $comment->content = $request->input('content');
        $product = Product::find($id);
        $comment->product_id = $product->id;
        $comment->user_id = Auth::user()->id;
        $comment->name = Auth::user()->name;
        $comment->save();
        return redirect()->route("product.detail", compact( 'id'));
    }
}
