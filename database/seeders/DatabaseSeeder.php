<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PizzaSeeder;
use Database\Seeders\IngredientSeeder;
use Database\Seeders\PizzaIngredientSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            PizzaSeeder::class,
            IngredientSeeder::class,
            PizzaIngredientSeeder::class,
        ]);
    }
}
