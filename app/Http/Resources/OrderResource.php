<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Order;

class OrderResource extends JsonResource
{
    /**
     * @param  Order $order
     * @return array
     */
    public function toArray(Order $order)
    {
        return [
            'id' => $this->id,
            'pizza_id' => $this->p_id,
            'quantity' => $this->count,
            'total_price' => $this->total_price,
            'name' => $this->name,
            'phone' => $this->phone,
            'address' => $this->address,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    
    }
}