<?php

namespace App\Http\Repositories;

use Exception;
use App\Models\Pizza;

class PizzaRepository
{
    public function getAllPizzas()
    {
        return Pizza::all();
    }

    public function getPizzaById(int $id)
    {
        $pizza = Pizza::find($id);

        if (!$pizza) {
            throw new Exception(sprintf('Could not find pizza with id "%d"', $id), 404);
        }

        return $pizza;
    }

    public function createPizza(Pizza $pizza){
        $result = Pizza::create([
            'name' => $pizza->getName(),
            'description' => $pizza->getDescription(),
            'price' => $pizza->getPrice(),
        ]);

        return $result;
    }

    public function delete(int $id)
    {
        return Pizza::findOrFail($id)->delete();
    }
}