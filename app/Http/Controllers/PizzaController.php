<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    /**
     * Toon alle pizzas (menu pagina)
     */
   public function index()
{
    $pizzas = Pizza::all();

    return view('pizzas.index', compact('pizzas'));
}

    /**
     * Formulier om pizza toe te voegen
     */
    public function create()
    {
        return view('pizzas.create');
    }

    /**
     * Opslaan van nieuwe pizza
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric'
        ]);

        Pizza::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect('/pizzas')->with('success', 'Pizza toegevoegd!');
    }
    public function edit(Pizza $pizza)
    {
        return view('pizzas.edit', compact('pizza'));
    }
    public function update(Request $request, Pizza $pizza)
{
    $request->validate([
        'name' => 'required|string',
        'description' => 'required|string',
        'price' => 'required|numeric',
    ]);

    $pizza->update([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
    ]);

    return redirect('/pizzas');
}
public function destroy(Pizza $pizza)
{
    $pizza->delete();

    return redirect('/pizzas');
}
}