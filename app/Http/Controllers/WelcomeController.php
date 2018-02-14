<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class WelcomeController extends Controller
{
  public function welcome()
    {
     
            $products = Product::all()->toArray();
        
        return view('welcome', compact('products'));

    }
}
