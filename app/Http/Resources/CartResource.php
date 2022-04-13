<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // dd($this->product);
        return [
            
            'id' => $this->id,
            'product' => $this->product,
            'user' => $this->user,
            'quantity' => $this->quantity,
            'price' => $this->product->price,
            'created_at' => $this->created_at,
        ];
    }
}
