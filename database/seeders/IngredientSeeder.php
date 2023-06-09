<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ingredients')->insert([
            'name' => "tomato",
            'price' => 50,
        ]);

        DB::table('ingredients')->insert([
            'name' => "sliced mushrooms",
            'price' => 50,
        ]);

        DB::table('ingredients')->insert([
            'name' => "feta cheese",
            'price' => 100,
        ]);

        DB::table('ingredients')->insert([
            'name' => "sausages",
            'price' => 100,
        ]);

        DB::table('ingredients')->insert([
            'name' => "sliced onion",
            'price' => 50,
        ]);

        DB::table('ingredients')->insert([
            'name' => "mozzarella cheese",
            'price' => 30,
        ]);

        DB::table('ingredients')->insert([
            'name' => "oregano",
            'price' => 200,
        ]);

        DB::table('ingredients')->insert([
            'name' => "bacon",
            'price' => 100,
        ]);
    }
}
