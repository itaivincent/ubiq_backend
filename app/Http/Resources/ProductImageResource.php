<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductImageResource extends JsonResource
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
            'product_id' => $this->product_id,
            'store_id' => $this->store_id,
            'category' => $this->category,
            'file_name' => $this->file_name,
            'file_path' => $this->file_path,          

        ];

    }
}
