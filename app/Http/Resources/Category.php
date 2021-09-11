<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Category extends JsonResource
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
            'parent_id' => $this->parent_id,
            'name' => $this->name,
            'ar_name' => $this->ar_name,
            'description' => $this->description,
            'ar_description' => $this->ar_description,
            'image' => $this->image,
            'price' => $this->price,
            'discount' => $this->discount,
        ];
    }
}
