<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        $products = Product::all();
        return view('welcome',compact('products'));
    }

    public function viewProduct($id)
    {
        if(Product::where('id',$id)->exists())
        {
            $product = Product::where('id',$id)->first();
            return view('viewProduct',compact('product'));
        }
        else{
            return redirect('/')->with('status','No such product found');
        }
    }

    public function payProduct($id)
    {
        if(Product::where('id',$id)->exists())
        {
            $product = Product::where('id',$id)->first();
            return view('payProduct',compact('product'));
        }
        else{
            return redirect('/')->with('status','No such product found');
        }
    }
}
