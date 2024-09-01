<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        // Crea una nuova valutazione
        $rating = Rating::create($request->all());
        return response()->json($rating, 201);
    }

    public function update(Request $request, $id)
    {
        // Aggiorna una valutazione esistente
        $rating = Rating::findOrFail($id);
        $rating->update($request->all());
        return response()->json($rating);
    }

    public function destroy($id)
    {
        // Elimina una valutazione
        $rating = Rating::findOrFail($id);
        $rating->delete();
        return response()->json(null, 204);
    }
}
