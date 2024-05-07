<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Requests\ProductCreateRequest;

class ProductController extends Controller
{

    // public function __construct()
    
    // {

    //     $this->middleware('auth')->except('index','show');

    // }

    public function index()
    {
        $products = Product::all();
        return view ('products.index', 
        compact('products')
    );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories= Category::all();
        return view('products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductCreateRequest $request)
    {
        // dd($request->all());

        $product=Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'img'=>$request->file('img')->store('public/img'),
            'user_id'=>Auth::id(),
            'category_id'=>$request->category
        ]);

        return redirect(route('products.create'))->with('message','Complimenti hai inserito correttamente la card');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
