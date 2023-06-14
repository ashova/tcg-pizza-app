<?php

namespace App\Http\Repositories;

use Exception;
use App\Models\Ingredient;

class IngredientRepository
{
    public function getAllIngredients()
    {
        return Ingredient::all();
    }

    public function getIngredientById(int $id)
    {
        $ingredient = Ingredient::find($id);

        if (!$ingredient) {
            throw new Exception(sprintf('Could not find ingredient with id "%d"', $id), 404);
        }

        return $ingredient;
    }

    public function create(Ingredient $ingredient)
    {
        return Ingredient::create($ingredient);
    }

    public function delete(int $id)
    {
        return Ingredient::findOrFail($id)->delete();
    }
}