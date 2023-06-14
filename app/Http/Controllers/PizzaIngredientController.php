<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class PizzaIngredientController extends Controller
{
    public function add(Request $request, Pizza $pizza)
    {
        $request->validate([
            'ingredient_id' => 'required|exists:ingredients,id',
            'order' => 'required|integer|min:1',
        ]);

        $pizza->ingredients()->attach($request->input('ingredient_id'), ['order' => $request->input('order')]);

        return redirect()->route('pizzas.index');
    }

    public function destroy(Pizza $pizza, Ingredient $ingredient)
    {
        $pizza->ingredients()->detach($ingredient);

        return redirect()->route('pizzas.index');
    }
}
