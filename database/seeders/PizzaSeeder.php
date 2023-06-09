<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pizzas')->insert([
            'name' => "MacDac Pizza",
            'description' => Str::random(50),
            'price' => 870,
            'image' => '/images/macdac.png',
        ]);

        DB::table('pizzas')->insert([
            'name' => "Lovely Mushroom Pizza",
            'description' => Str::random(50),
            'price' => 645,
            'image' => '/images/lovely.png',
        ]);

        DB::table('pizzas')->insert([
            'name' => "Mixed Pizza",
            'description' => Str::random(50),
            'price' => 970,
            'image' => '/images/mixed.png',
        ]);
    }
}
