<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Pizza;

class PizzaResource extends JsonResource
{
    /**
     * @param Pizza $pizza
     * @return array
     */
    public function toArray(Pizza $pizza)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'image' => $this->image,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    
    }
}