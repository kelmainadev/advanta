<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function __construct()
    {
        $this->middleware('auth');
        $this->user =  \Auth::user();
    }

    public function index()
    {
        auth::user();
            $products = Product::all()->toArray();
        
        return view('products.index', compact('products'));

    }
     public function welcome()
    {
                   
         $products = Product::all()->toArray();
        
        return view('welcome', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        auth::user();
        return view ('products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        auth::user();
         $product = new Product([
          'name' => $request->get('name'),
          // 'image' => $request->get('image'),
          'description' => $request->get('description'),
          'price' => $request->get('price'),
          // 'post' => $request->get('post')
        ]);

        $product->save();
        return view ('products.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        auth::user();
        $products = Product::find($id);
        
        return view('products.edit', compact('products','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        auth::user();
        $products = Product::find($id);
        $products->name = $request->get('name');
        $products->description = $request->get('description');
        $products->title = $request->get('price');
        $products->save();
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        auth::user();
         $product = Product::find($id);
      $product->delete();

      return redirect('/products');
    }
}
