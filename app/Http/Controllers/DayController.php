<?php

namespace App\Http\Controllers;

use App\Models\Day;
use Illuminate\Http\Request;

class DayController extends Controller
{
    public function store(Request $request)
    {
        // Crea una nuova giornata
        $day = Day::create($request->all());
        return response()->json($day, 201);
    }

    public function update(Request $request, $id)
    {
        // Aggiorna una giornata esistente
        $day = Day::findOrFail($id);
        $day->update($request->all());
        return response()->json($day);
    }

    public function destroy($id)
    {
        // Elimina una giornata
        $day = Day::findOrFail($id);
        $day->delete();
        return response()->json(null, 204);
    }
}