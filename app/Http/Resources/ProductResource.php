<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'product_name' => $this->product_name,
            'store_id' => $this->store_id,
            'category' => $this->category,
            'sub_category' => $this->sub_category,
            'description' => $this->description,
            'size' => $this->size,
            'color' => $this->color,
            'quantity_instock' => $this->quantity_instock,
            'zwl_price' => $this->zwl_price,
            'usd_price' => $this->usd_price,

            //other tables 
            'product_images' => $this->product_images,


        ];


    }
}
