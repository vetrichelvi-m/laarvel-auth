<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\CardItem;
class ProductController extends Controller
{
    public function index() 
    {
        $Category = ProductCategory::all();
        $Product = Product::all();
        // echo"<pre>";print_r($Product);exit();
        return view('product', compact('Category','Product'));

    }

   public function addtocard(Request $req){
   
    // return "heloo";
    if($req->session()->has('user')){
        $cart = New CardItem;
        $cart->user_id  = $req->session('user')['id'];
        $cart->product_id =$req->product_id;
        echo"<pre>";print_r($card);exit();
        $cart->save();

        // return "Hello";
    }else{
        return  redirect('/login');
    }
   }
}
