<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function store(Request $request)
    {
        // Crea una nuova nota
        $note = Note::create($request->all());
        return response()->json($note, 201);
    }

    public function update(Request $request, $id)
    {
        // Aggiorna una nota esistente
        $note = Note::findOrFail($id);
        $note->update($request->all());
        return response()->json($note);
    }

    public function destroy($id)
    {
        // Elimina una nota
        $note = Note::findOrFail($id);
        $note->delete();
        return response()->json(null, 204);
    }
}