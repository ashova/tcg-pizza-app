<?php

namespace App\Http\Controllers;

use App\Http\Repositories\IngredientRepository;
use App\Http\Resources\IngredientResource;
use Illuminate\Http\Request;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    public function __construct(
        protected IngredientRepository $repository
    ){}

    public function getIngredients(Request $request)
    {   
        /** @var Ingredient[] $ingredient */
        $ingredient = $this->repository->getAllIngredients();

        return response()->json(IngredientResource::collection($ingredient));
    }

    public function getIngredient(Request $request)
    {
        $request->validate([
            'id' => 'required, int',
        ]);

        $ingredient = null;
        try {
            /** @var Ingredient $ingredient */
            $ingredient = $this->repository->getIngredientById($request->id);

            $status = 200;
            $message = 'OK';
        } catch (\Throwable $e) {
            $status = $e->getCode();
            $message = $e->getMessage();
        } 

        return response()->json([
            'data' => $ingredient ? IngredientResource::make($ingredient) : null,
            'message' => $message
        ], $status);
    }

    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|decimal:2',
        ]);


        $ingredient = new Ingredient();
        $ingredient
            ->setName($request->name)
            ->setPrice($request->price);

        $this->repository->create($ingredient);

        return response()->json($ingredient, 201);
    }

    public function remove(Request $request)
    {
        $request->validate([
            'id' => 'required, int',
        ]);

        $this->repository->delete($request->id);
        
        return response()->json(null, 204);
    }
}
