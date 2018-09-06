<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function getproducts()
    {
      //$products=Product::take(15)->get();
      $products=Product::paginate(12);
      return view('products', compact('products'));
    }

    public function getproduct($productID)
    {
    	$product= Product::find($productID);

    	return view('product', compact('product'));
    }
}
