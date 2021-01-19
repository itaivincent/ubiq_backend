<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;


        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'store_name',
        'store_owner',
        'promo_description',
        'store_phone_number',
        'store_email',
        'store_address',
        'address',
        
    ];

}
