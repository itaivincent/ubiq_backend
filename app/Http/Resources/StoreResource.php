<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreResource extends JsonResource
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
        'store_name' => $this->store_name,
        'promo_description' => $this->promo_description,
        'store_address' => $this->store_address,
        'file_name' => $this->file_name, 
        'file_path' => $this->file_path, 

        
         ];

    }
}
