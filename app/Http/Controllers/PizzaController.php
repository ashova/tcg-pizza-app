<?php

namespace App\Http\Controllers;

use App\Http\Repositories\PizzaRepository;
use App\Http\Resources\PizzaResource;
use Illuminate\Http\Request;
use App\Models\Pizza;


class PizzaController extends Controller
{
    public function __construct(
        protected PizzaRepository $pizzaRepository
    ){}

    public function getPizzas(Request $request)
    {   
        /** @var Pizza[] $pizzas */
        $pizzas = $this->pizzaRepository->getAllPizzas();

        return response()->json(PizzaResource::collection($pizzas));
    }

    public function getPizza(Request $request)
    {
        $request->validate([
            'id' => 'required, int',
        ]);

        $pizza = null;
        try {
            /** @var Pizza $pizza */
            $pizza = $this->pizzaRepository->getPizzaById($request->id);

            $status = 200;
            $message = 'OK';
        } catch (\Throwable $e) {
            $status = $e->getCode();
            $message = $e->getMessage();
        } 

        return response()->json([
            'data' => $pizza ? PizzaResource::make($pizza) : null,
            'message' => $message
        ], $status);
    }

    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|decimal:2',

            'description' => 'nullable|string',
        ]);

        $pizza = new Pizza();
        $pizza
            ->setName($request->name)
            ->setPrice($request->price)
            ->setDescription($request->description);

        $this->pizzaRepository->createPizza($pizza);

        return redirect()->route('pizzas.index');
    }

    public function remove(Request $request)
    {
        $request->validate([
            'id' => 'required, int',
        ]);

        $this->pizzaRepository->delete($request->id);
        
        return response()->json(null, 204);
    }

}