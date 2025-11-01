@extends('layout')

@section('title', "Demande d'Événement")

@section('content')
<style>
        :root {
            --primary: #764BA2;
            --secondary: #FFB447;
            --accent: #6C63FF;
            --light: #F8F9FA;
            --dark: #343A40;
            --success: #28a745;
            --gradient: linear-gradient(135deg, var(--primary), var(--secondary));
        }

        /* body {
            background: linear-gradient(-45deg, #f8f9fa, #e9ecef, #f8f9fa, #e9ecef);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
        } */

        /* @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        } */

        .form-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .card-animated {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: none;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            opacity: 0;
            transform: translateY(30px);
            animation: cardEntrance 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards;
        }

        @keyframes cardEntrance {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card-header {
            background: var(--gradient);
            color: white;
            padding: 1.5rem 2rem;
            border-bottom: none;
            position: relative;
            overflow: hidden;
        }

        .card-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(-100%);
            animation: shine 3s infinite;
        }

        /* @keyframes shine {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        } */

        .card-header h3 {
            margin: 0;
            font-weight: 600;
            position: relative;
            z-index: 1;
        }

        .card-body {
            padding: 2.5rem;
        }

        .form-label {
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: var(--dark);
            transition: color 0.3s;
        }

        .form-control, .form-select {
            border-radius: 10px;
            padding: 0.75rem 1rem;
            border: 2px solid #e9ecef;
            transition: all 0.3s;
            background-color: #fff;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(118, 75, 162, 0.25);
            transform: translateY(-2px);
        }

        .form-group {
            margin-bottom: 1.5rem;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeUp 0.6s forwards;
        }

        .form-group:nth-child(1) { animation-delay: 0.1s; }
        .form-group:nth-child(2) { animation-delay: 0.2s; }
        .form-group:nth-child(3) { animation-delay: 0.3s; }
        .form-group:nth-child(4) { animation-delay: 0.4s; }
        .form-group:nth-child(5) { animation-delay: 0.5s; }
        .form-group:nth-child(6) { animation-delay: 0.6s; }

        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn {
            border-radius: 10px;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-success {
            background: var(--gradient);
            border: none;
            color: white;
        }

        .btn-animate {
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-animate::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: all 0.3s;
            z-index: -1;
        }

        .btn-animate:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(0, 0, 0, 0.15);
        }

        .btn-animate:hover::before {
            width: 100%;
        }

        .file-upload-container {
            position: relative;
            overflow: hidden;
            display: inline-block;
            width: 100%;
        }

        .file-upload-container input[type="file"] {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .file-upload-label {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0.75rem 1rem;
            background-color: #f8f9fa;
            border: 2px dashed #dee2e6;
            border-radius: 10px;
            transition: all 0.3s;
            cursor: pointer;
            text-align: center;
        }

        .file-upload-label:hover {
            border-color: var(--primary);
            background-color: rgba(118, 75, 162, 0.05);
        }

        .file-upload-label i {
            margin-right: 0.5rem;
            color: var(--primary);
        }

        .floating-label {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .floating-input {
            width: 100%;
            padding: 1rem 1rem 0.5rem;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            background: #fff;
            transition: all 0.3s;
        }

        .floating-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(118, 75, 162, 0.25);
            outline: none;
        }

        .floating-label-text {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
            color: #6c757d;
            transition: all 0.3s;
            pointer-events: none;
            background: #fff;
            padding: 0 0.25rem;
        }

        .floating-input:focus + .floating-label-text,
        .floating-input:not(:placeholder-shown) + .floating-label-text {
            top: 0;
            font-size: 0.8rem;
            color: var(--primary);
        }

        .progress-bar {
            height: 4px;
            background: var(--gradient);
            width: 0%;
            transition: width 0.5s;
            border-radius: 2px;
            margin-top: 0.5rem;
        }

        .character-count {
            font-size: 0.8rem;
            color: #6c757d;
            text-align: right;
            margin-top: 0.25rem;
        }

        @media (max-width: 768px) {
            .card-body {
                padding: 1.5rem;
            }
            
            .btn {
                width: 100%;
                margin-bottom: 0.5rem;
            }
            
            .d-flex.justify-content-end.gap-2 {
                flex-direction: column;
            }
        }
    </style>

 <div class="container my-5">
        <div class="form-container">
            <div class="card shadow-sm card-animated">
                <div class="card-header">
                    <h3><i class="fas fa-calendar-plus me-2"></i>Faire une demande pour un Événement</h3>
                </div>

                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data" id="eventForm">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="type_evenement" class="form-label">
                                Type d'Événement <span class="text-danger">*</span>
                            </label>
                            <select name="type_evenement" id="type_evenement" class="form-select" required>
                                <option value="">-- Sélectionner un type --</option>
                                <option value="conference">Conférence</option>
                                <option value="atelier">Atelier</option>
                                <option value="seminaire">Séminaire</option>
                                <option value="formation">Formation</option>
                                <option value="team-building">Team Building</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="activite" class="form-label">
                                Nom de l'Activité <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="activite" id="activite" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="description" class="form-label">
                                Description de l'Événement
                            </label>
                            <textarea name="description" id="description" class="form-control" rows="4" placeholder="Décrire l'événement..." maxlength="500"></textarea>
                            <div class="character-count"><span id="charCount">0</span>/500 caractères</div>
                            <div class="progress-bar" id="descriptionProgress"></div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="form-label">
                                Téléphone <span class="text-danger">*</span>
                            </label>
                            <input type="tel" name="phone" id="phone" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                Image de l'Événement
                            </label>
                            <div class="file-upload-container">
                                <div class="file-upload-label">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <span id="fileLabel">Choisir un fichier</span>
                                </div>
                                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-2 mt-4 form-group">
                            <a href="{{ url()->previous() }}" class="btn btn-secondary btn-animate">
                                <i class="fas fa-times me-2"></i>Annuler
                            </a>
                            <button type="submit" class="btn btn-success btn-animate">
                                <i class="fas fa-paper-plane me-2"></i>Soumettre
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animation pour le compteur de caractères
            const description = document.getElementById('description');
            const charCount = document.getElementById('charCount');
            const progressBar = document.getElementById('descriptionProgress');
            
            description.addEventListener('input', function() {
                const count = this.value.length;
                charCount.textContent = count;
                
                // Mise à jour de la barre de progression
                const progress = (count / 500) * 100;
                progressBar.style.width = `${progress}%`;
                
                // Changement de couleur selon le pourcentage
                if (progress > 90) {
                    progressBar.style.background = 'linear-gradient(135deg, #ff6b6b, #ee5a24)';
                } else if (progress > 75) {
                    progressBar.style.background = 'linear-gradient(135deg, #ffa726, #ff9800)';
                } else {
                    progressBar.style.background = 'linear-gradient(135deg, #764BA2, #FFB447)';
                }
            });
            
            // Animation pour l'upload de fichier
            const fileInput = document.getElementById('image');
            const fileLabel = document.getElementById('fileLabel');
            
            fileInput.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    fileLabel.textContent = this.files[0].name;
                } else {
                    fileLabel.textContent = 'Choisir un fichier';
                }
            });
            
            // Animation de validation du formulaire
            const form = document.getElementById('eventForm');
            
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Animation de chargement
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Traitement...';
                submitBtn.disabled = true;
                
                // Simulation d'envoi
                setTimeout(function() {
                    submitBtn.innerHTML = '<i class="fas fa-check me-2"></i>Envoyé!';
                    submitBtn.style.background = 'linear-gradient(135deg, #28a745, #20c997)';
                    
                    // Réinitialisation après 2 secondes
                    setTimeout(function() {
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                        submitBtn.style.background = '';
                    }, 2000);
                }, 1500);
            });
        });
    </script>
@endsection
