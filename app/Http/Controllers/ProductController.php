<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Store;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function parameters()
    {
        $stores = Store::all();
        $categories = Category::all();
       // dd($stores);
        return view('products.parameters', compact('stores','categories'));
    }



        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function parameters_store(Request $request)
    {

        if (!$request->hasFile('images')) {

            return redirect('products/parameters')->with('toast_error', 'please upload an image');
        }
        
        $file = $request->images;
       // dd($file);
        $file_name = $request->input('category').'.'.$file->getClientOriginalExtension();
        // save to public/products as the new $filename
         $path = $file->storeAs('public/categories', $file_name);
      
        // dd($request->images);
        $category = New Category;
        $category->category = $request->category;
        $category->store_id = $request->store_id;
        $category->category_images = $file_name;
        $category->file_path = $path;
        $category->save();

        
        if($category){
    
            return redirect('products/parameters')->with('toast_success', 'store created successfully!!');

        }
    
        return redirect('products/parameters')->with('toast_error', 'Failed to create store!!');

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
