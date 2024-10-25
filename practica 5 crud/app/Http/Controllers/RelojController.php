<?php

namespace App\Http\Controllers;

use App\Models\Reloj; 
use Illuminate\Http\Request;

class RelojController extends Controller
{
    public function index()
    {
        $relojes = Reloj::all(); 
        return view('relojes.index', compact('relojes'));
    }

    public function create()
    {
        return view('relojes.create');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'material_correa' => 'required|string|max:255',
            'resistencia_agua' => 'required|integer',
        ]);

        Reloj::create($request->all());
        return redirect()->route('relojes.index')->with('success', 'Reloj creado correctamente.');
    }

    public function edit($id)
{
    $reloj = Reloj::findOrFail($id);
    return view('relojes.edit', compact('reloj'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'marca' => 'required',
        'modelo' => 'required',
        'material_correa' => 'required',
        'resistencia_agua' => 'required|numeric',
    ]);

    $reloj = Reloj::findOrFail($id);
    $reloj->marca = $request->marca;
    $reloj->modelo = $request->modelo;
    $reloj->material_correa = $request->material_correa;
    $reloj->resistencia_agua = $request->resistencia_agua;
    $reloj->save();

    return redirect()->route('relojes.index')->with('success', 'Reloj actualizado correctamente.');
}


public function destroy($id)
{
    $reloj = Reloj::findOrFail($id);
    $reloj->delete();

    return redirect()->route('relojes.index')->with('success', 'Reloj eliminado correctamente.');
}
}
