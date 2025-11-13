<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'nom_evenement' => 'required|string|max:255',
            'contact_organisateur' => 'required|string|max:255',
            'description' => 'required|string',
            'type_evenement' => 'required|string|max:255',
            'affiche' => 'nullable|image|max:2048',
        ]);

        // Gestion de l'upload de l'affiche
        if ($request->hasFile('affiche')) {
            $path = $request->file('affiche')->store('affiches', 'public');
            $validated['affiche'] = $path;
        }

        // Création de l'événement (le statut est géré par le modèle)
        $event = Event::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Demande d\'événement créée avec succès',
            'data' => $event
        ], 201);
    }
}