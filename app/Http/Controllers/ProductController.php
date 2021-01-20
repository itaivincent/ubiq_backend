<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Store;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;
use App\Models\SubCategory;
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
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $stores = Store::all();

        return view('products.create', compact('subcategories','categories','stores'));

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

            return redirect('products/parameters')->with('info', 'please upload an image');
        }
        
        $file = $request->images;
       // dd($file);
        $file_name = $request->input('name').'.'.$file->getClientOriginalExtension();
        // save to public/products as the new $filename
         $path = $file->storeAs('public/categories', $file_name);
      
        // dd($request->images);
        $category = New Category;
        $category->category = $request->name;
        $category->category_images = $file_name;
        $category->file_path = $path;
        $category->save();

        
        if($category){
    
            return redirect('products/parameters')->with('success', 'store created successfully!!');

        }
    
        return redirect('products/parameters')->with('error', 'Failed to create store!!');

    }









    
    public function subcategory(Request $request)
    {

        if (!$request->hasFile('images')) {

            return redirect('products/parameters')->with('info', 'please upload an image');
        }
        
        $file = $request->images;
       // dd($file);
        $file_name = $request->input('subcategory').'.'.$file->getClientOriginalExtension();
        // save to public/products as the new $filename
         $path = $file->storeAs('public/categories', $file_name);
      
        // dd($request->images);
        $category = New SubCategory;
        $category->sub_category = $request->subcategory;
        $category->category_id = $request->category;
        $category->category_images = $file_name;
        $category->file_path = $path;
        $category->save();

        
        if($category){
    
            return redirect('products/parameters')->with('success', 'store created successfully!!');

        }
    
        return redirect('products/parameters')->with('success', 'Failed to create store!!');

    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->images);
        
        if (!$request->hasFile('images')) {

            return redirect('products/create')->with('info', 'please upload  images');
        }
        
        // $file = $request->images;
   
        // $file_name = $request->input('product_name').'.'.$file->getClientOriginalExtension();
        // // save to public/products as the new $filename
        //  $path = $file->storeAs('public/products', $file_name);
      
        $category = Category::where('id',$request->category_id)->first();
        $category_name = $category->category;
  
        $subcategory = SubCategory::where('id', $request->sub_category_id)->first();
        $sub_category_name = $subcategory->sub_category;


        $product = New Product;
        $product->product_name = $request->product_name;
        $product->store_id = $request->store_id;
        $product->category = $category_name;
        $product->sub_category =  $sub_category_name;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->sub_category_id = $request->sub_category_id;
        $product->color = $request->color;
        $product->size = $request->size;
        $product->quantity_instock = $request->quantity_instock;
        $product->zwl_price = $request->zwl_price;
        $product->usd_price = $request->usd_price;
        $product->save();

        $files = [];
        $paths = [];

        foreach($request->images as $file){
         
        $file_name = time().rand(1,100).'.'.$file->getClientOriginalExtension();
        // save to public/products as the new $filename
         $path = $file->storeAs('public/products', $file_name);
        //   $files[] = $file_name;
        //   $paths[] = $path;
        $image = New ProductImage;
        $image->product_id = $product->id;
        $image->store_id = $request->store_id;
        $image->file_name = $file_name;
        $image->file_path =  $path;
        $image->save();

        }

        
        if($product && $image){
    
            return redirect('products/create')->with('success', 'product created successfully!!');

        }
    
        return redirect('products/create')->with('error', 'Failed to create product!!');


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
