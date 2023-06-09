<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PizzaIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //macdac
        DB::table('default_pizzas_ingredients')->insert([
            'pizza_id' => 1,
            'ingredient_id' => 1,
        ]);
        DB::table('default_pizzas_ingredients')->insert([
            'pizza_id' => 1,
            'ingredient_id' => 2,
        ]);
        DB::table('default_pizzas_ingredients')->insert([
            'pizza_id' => 1,
            'ingredient_id' => 3,
        ]);
        DB::table('default_pizzas_ingredients')->insert([
            'pizza_id' => 1,
            'ingredient_id' => 4,
        ]);
        DB::table('default_pizzas_ingredients')->insert([
            'pizza_id' => 1,
            'ingredient_id' => 5,
        ]);
        DB::table('default_pizzas_ingredients')->insert([
            'pizza_id' => 1,
            'ingredient_id' => 6,
        ]);
        DB::table('default_pizzas_ingredients')->insert([
            'pizza_id' => 1,
            'ingredient_id' => 7,
        ]);

        //lovely
        DB::table('default_pizzas_ingredients')->insert([
            'pizza_id' => 2,
            'ingredient_id' => 1,
        ]);
        DB::table('default_pizzas_ingredients')->insert([
            'pizza_id' => 2,
            'ingredient_id' => 8,
        ]);
        DB::table('default_pizzas_ingredients')->insert([
            'pizza_id' => 2,
            'ingredient_id' => 6,
        ]);
        DB::table('default_pizzas_ingredients')->insert([
            'pizza_id' => 2,
            'ingredient_id' => 2,
        ]);
        DB::table('default_pizzas_ingredients')->insert([
            'pizza_id' => 2,
            'ingredient_id' => 7,
        ]);

        //mixed
        DB::table('default_pizzas_ingredients')->insert([
            'pizza_id' => 3,
            'ingredient_id' => 1,
        ]);
        DB::table('default_pizzas_ingredients')->insert([
            'pizza_id' => 3,
            'ingredient_id' => 2,
        ]);
        DB::table('default_pizzas_ingredients')->insert([
            'pizza_id' => 3,
            'ingredient_id' => 3,
        ]);
        DB::table('default_pizzas_ingredients')->insert([
            'pizza_id' => 3,
            'ingredient_id' => 4,
        ]);
        DB::table('default_pizzas_ingredients')->insert([
            'pizza_id' => 3,
            'ingredient_id' => 5,
        ]);
        DB::table('default_pizzas_ingredients')->insert([
            'pizza_id' => 3,
            'ingredient_id' => 6,
        ]);
        DB::table('default_pizzas_ingredients')->insert([
            'pizza_id' => 3,
            'ingredient_id' => 7,
        ]);
        DB::table('default_pizzas_ingredients')->insert([
            'pizza_id' => 3,
            'ingredient_id' => 8,
        ]);
    }
}
