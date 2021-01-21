<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubCategoryResource extends JsonResource
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
            'category_id' => $this->category_id,
            'sub_category' => $this->sub_category,
            'category_images' => $this->category_images,
            'file_path' => $this->file_path,       

        ];
    }
}
