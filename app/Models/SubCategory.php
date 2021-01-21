<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [

        'sub_category',
        'category_id',
        'category_images',
        'file_path',
        
    ];


    public function Category(){

    	return $this->belongsTo('App\Models\Category');
    }

}
