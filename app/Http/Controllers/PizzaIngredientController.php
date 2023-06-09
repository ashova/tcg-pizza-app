<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePizzaIngredientRequest;
use App\Http\Requests\UpdatePizzaIngredientRequest;
use App\Models\PizzaIngredient;

class PizzaIngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePizzaIngredientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PizzaIngredient $pizzaIngredient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PizzaIngredient $pizzaIngredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePizzaIngredientRequest $request, PizzaIngredient $pizzaIngredient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PizzaIngredient $pizzaIngredient)
    {
        //
    }
}