<?php
namespace App\Http\Controllers;

use App\Models\Journey;
use Illuminate\Http\Request;

class JourneyController extends Controller
{
    public function index()
    {
        // Restituisce tutti i viaggi
        return Journey::with('days.stops')->get();
    }

    public function store(Request $request)
    {
        // Crea un nuovo viaggio
        $journey = Journey::create($request->all());
        return response()->json($journey, 201);
    }

    public function show($id)
    {
        // Restituisce un viaggio specifico con tutte le sue giornate e tappe
        $journey = Journey::with('days.stops')->findOrFail($id);
        return response()->json($journey);
    }

    public function update(Request $request, $id)
    {
        // Aggiorna un viaggio esistente
        $journey = Journey::findOrFail($id);
        $journey->update($request->all());
        return response()->json($journey);
    }

    public function destroy($id)
    {
        // Elimina un viaggio
        $journey = Journey::findOrFail($id);
        $journey->delete();
        return response()->json(null, 204);
    }
}