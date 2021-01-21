<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'product_name',
        'store_id',
        'added_by',
        'category',
        'sub_category',
        'category_id',
        'sub_category_id',
        'description',
        'size',
        'color',
        'quantity_instock',
        'promotional_information',
        'zwl_price',
        'usd_price'
        
    ];

    public function product_images()
    {
        return $this->hasMany('App\Models\ProductImage');
    }
}
