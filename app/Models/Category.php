<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [

        'category',
        'category_level',
        'category_images',
        'file_path',
        
    ];

    public function sub_categories()
    {
        return $this->hasMany('App\Models\SubCategory');
    }
}
