<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\PizzaIngredientController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(PizzaController::class)->group(function () {
    Route::get('/pizzas', 'getPizzas');
    Route::get('/pizzas/{id}', 'getPizza');
    Route::post('/pizzas', 'add');
    Route::delete('/pizzas/{id}', 'remove');
});

Route::controller(IngredientController::class)->group(function () {
    Route::get('/ingredients/{id}', 'getIngredient');
    Route::get('/ingredients', 'getIngredients');
});

Route::controller(PizzaIngredientController::class)->group(function () {
    Route::post('/pizzas/{id}/ingredients', 'add');
    Route::delete('/pizzas/{id}/ingredients/{ingredient}', 'remove');
});