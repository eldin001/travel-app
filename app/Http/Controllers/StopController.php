<?php

namespace App\Http\Controllers;

use App\Models\Stop;
use Illuminate\Http\Request;

class StopController extends Controller
{
    public function store(Request $request)
    {
        // Crea una nuova tappa
        $stop = Stop::create($request->all());
        return response()->json($stop, 201);
    }

    public function update(Request $request, $id)
    {
        // Aggiorna una tappa esistente
        $stop = Stop::findOrFail($id);
        $stop->update($request->all());
        return response()->json($stop);
    }

    public function destroy($id)
    {
        // Elimina una tappa
        $stop = Stop::findOrFail($id);
        $stop->delete();
        return response()->json(null, 204);
    }
}