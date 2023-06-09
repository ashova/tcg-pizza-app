<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PizzaIngredient extends Model
{
    use HasFactory;

    protected $table = 'default_pizzas_ingredients';
    protected $primaryKey = 'id';

    protected $fillable = [
        'pizza_id',
        'ingredient_id',
    ];

    public $timestamps = true;
}
