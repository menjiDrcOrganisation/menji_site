<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('nom_evenement', 255);
            $table->string('contact_organisateur', 255);
            $table->text('description');
            $table->string('type_evenement', 255);
            $table->enum('statut', ['en_attente', 'valide', 'ferme'])->default('en_attente');
            $table->string('affiche')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
};