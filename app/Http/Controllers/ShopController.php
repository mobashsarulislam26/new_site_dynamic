<?php

namespace App\Http\Controllers;

use App\Models\Product;
use WithPagination;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ShopController extends Controller
{

  public function index()
    {
        $products = Product::paginate(10);
        return view('Shop', compact('products'));
    }

}
