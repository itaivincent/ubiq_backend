<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = [

        'product_id',
        'store_id',
        'file_name ',
        'file_path',
        
    ];

    public function Product(){
    	return $this->belongsTo('App\Models\Product');
    }
}
