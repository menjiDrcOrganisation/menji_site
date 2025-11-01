@extends('layout')
@section('title','Demande d'Événement')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                
                <!-- Header -->
                <div class="card-header bg-white">
                    <h3 class="mb-0">Faire une demande pour un Événement</h3>
                </div>

                <!-- Body -->
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Type d'Événement -->
                        <div class="mb-3">
                            <label for="type_evenement" class="form-label">
                                Type d'Événement <span class="text-danger">*</span>
                            </label>
                            <select name="type_evenement" id="type_evenement" class="form-select" required>
                                <option value="">-- Sélectionner un type --</option>
                                <option value="conference">Conférence</option>
                                <option value="atelier">Atelier</option>
                                <option value="seminaire">Séminaire</option>
                            </select>
                        </div>

                        <!-- Nom de l'organisateur -->
                        <div class="mb-3">
                            <label for="organisateur" class="form-label">
                                Nom de l'Organisateur <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="organisateur" id="organisateur" class="form-control" required>
                        </div>

                        <!-- Nom de l'activité -->
                        <div class="mb-3">
                            <label for="activite" class="form-label">
                                Nom de l'Activité <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="activite" id="activite" class="form-control" required>
                        </div>

                        <!-- Gmail -->
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                Gmail <span class="text-danger">*</span>
                            </label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <label for="phone" class="form-label">
                                Téléphone <span class="text-danger">*</span>
                            </label>
                            <input type="tel" name="phone" id="phone" class="form-control" required>
                        </div>

                        <!-- Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label">
                                Image de l'Événement
                            </label>
                            <input type="file" name="image" id="image" class="form-control" accept="image/*">
                        </div>

                        <!-- Actions -->
                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <a href="{{ url()->previous() }}" class="btn btn-secondary">Annuler</a>
                            <button type="submit" class="btn btn-success">Soumettre</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
