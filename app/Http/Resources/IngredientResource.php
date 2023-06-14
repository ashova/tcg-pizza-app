<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price/100 . ' eur',
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    
    }
}