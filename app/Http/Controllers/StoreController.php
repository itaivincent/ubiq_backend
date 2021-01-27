<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $stores = Store::all();

        return view('stores.index' , compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sellers = User::all();
      // dd($sellers);
        return view('stores.create' , compact('sellers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){

            $store = Store::latest()->first();
            $store_id = $store->id+1;

     
            $file = $request->images;
            $file_name = $store_id .'.'.'png';
            // save to public/products as the new $filename
             $path = 'storage/stores/'. $file_name;
       
    
            $store = new Store;
            $store->store_name = $request->store_name;
            $store->store_email = $request->email;
            $store->store_owner = $request->store_owner;
            $store->store_phone_number = $request->phone_number;
            $store->promo_description = $request->promo;
            $store->store_address = $request->address;
            $store->file_name = $file_name;
            $store->file_path = $path;
            $save = $store->save();

            
    
            if($save){
    
                return redirect('stores/create')->with('success', 'store created successfully!!');
    
            }
        
            return redirect('stores/create')->with('error', 'Failed to create store!!');
        }
    }





    public function upload(Request $request){

        $folderPath = public_path('/storage/stores/');
       // dd($request->image);
       $store = Store::latest()->first();

       $file_name = $store->id+1;

        $image_parts = explode(";base64,", $request->image);

        $image_type_aux = explode("image/", $image_parts[0]);

        $image_type = $image_type_aux[1];

        $image_base64 = base64_decode($image_parts[1]);

        $file = $folderPath . $file_name . '.png';

        file_put_contents($file, $image_base64);

        return response()->json(['success'=>'success']);

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
