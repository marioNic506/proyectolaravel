<?php
namespace App\Http\Controllers;

use App\Models\Reloj;
use Illuminate\Http\Request;

class RelojController extends Controller
{
    public function index()
{
    $relojes = Reloj::all();
    return response()->json($relojes); 
}

    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'material_correa' => 'required|string|max:255',
            'resistencia_agua' => 'required|integer',
        ]);

        $reloj = Reloj::create($request->all());
        return response()->json($reloj, 201); 
    }

    public function show($id)
    {
        $reloj = Reloj::find($id);

        if (!$reloj) {
            return response()->json(['error' => 'Reloj no encontrado'], 404);
        }

        return response()->json($reloj);
    }

    public function update(Request $request, $id)
    {
        $reloj = Reloj::find($id);

        if (!$reloj) {
            return response()->json(['error' => 'Reloj no encontrado'], 404);
        }

        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'material_correa' => 'required|string|max:255',
            'resistencia_agua' => 'required|integer',
        ]);

        $reloj->update($request->all());
        return response()->json($reloj);
    }

    public function destroy($id)
    {
        $reloj = Reloj::find($id);

        if (!$reloj) {
            return response()->json(['error' => 'Reloj no encontrado'], 404);
        }

        $reloj->delete();
        return response()->json(['message' => 'Reloj eliminado correctamente']);
    }
}
