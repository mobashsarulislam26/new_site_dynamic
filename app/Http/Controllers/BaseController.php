<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class BaseController extends Controller
{
     public function home()
    {
        $category= Category::all();
        $products = Product::paginate(50);

        return view('home', compact('products','category'));
    }
    public function shop()
    {
         $products = Product::paginate(50);
        return view('Shop', compact('products'));
    //  return view('shop');
    }
    public function blog()
    {
        return view('blog');
    }
    public function page()
    {
        return view('page');
    }
    public function about()
    {
     return view('about');
    }
    public function contact()
    {
        return view('contact');
    }

    public function productDetails($id)
    {
       $product = Product::find($id);
       $category = Category::all();
        return view('productDetails', compact('product','category'));
    }


}
