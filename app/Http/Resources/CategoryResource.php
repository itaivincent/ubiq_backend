<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

            'id' => $this->id,         
            'category' => $this->category,
            'category_images' => $this->category_images,
            'file_path' => $this->file_path,    
            
            // Other tables 

            'sub_categories' => $this->sub_categories,

        ];
    }
}
