<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; // Assure-toi que le modèle Event existe

class EventController extends Controller
{
    public function store(Request $request)
    {
        // Validation des champs
        $validated = $request->validate([
            'type_evenement' => 'required|string',
            // 'organisateur' => 'required|string',
            'activite' => 'required|string',
            'description' => 'nullable|string',
            'email' => 'required|email',
            // 'phone' => 'required|string',
            'image' => 'nullable|image|max:2048', // max 2Mo
        ]);

        // Gérer l'image si elle existe
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('events', 'public');
            $validated['image'] = $path;
        }

        // Créer l'événement
        $event = Event::create($validated);

        // Retourner une réponse JSON
        return response()->json([
            'success' => true,
            'data' => $event
        ]);
    }
}

