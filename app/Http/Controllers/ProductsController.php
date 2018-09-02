<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function getproducts()
    {
      //$products=Product::take(15)->get();
      $products=Product::paginate(4);
      return view('products', compact('products'));
    }
}
