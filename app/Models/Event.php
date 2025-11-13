<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_evenement',
        'contact_organisateur',
        'description',
        'type_evenement',
        'statut',
        'affiche'
    ];

    protected $attributes = [
        'statut' => 'en_attente',
    ];
}