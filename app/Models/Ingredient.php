<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $table = 'ingredients';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'price',
    ];

    public $timestamps = true;

    public function pizzas()
    {
        return $this->belongsToMany(Pizza::class);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

        
    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice(string $price)
    {
        $this->price = intval(doubleval($price)*100);

        return $this;
    }
}
