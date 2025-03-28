<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corpo Docente - Faculdade</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       
    </style>
</head>
<body>
 
<?php
    include("menu.php");
    ?>

   
    <!-- Corpo Docente -->
    <div class="container my-5">
        <h1 class="text-center mb-4">Corpo Docente</h1>
        <div class="row">
            <!-- Professor 1 -->
            <div class="col-md-4">
                <div class="card professor-card">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top professor-photo" alt="Professor 1">
                    <div class="card-body">
                        <h5 class="card-title">Dr. João Silva</h5>
                        <p class="card-text"><strong>Cargo:</strong> Professor Titular</p>
                        <p class="card-text"><strong>Área de Atuação:</strong> Engenharia de Software</p>
                    </div>
                </div>
            </div>

            <!-- Professor 2 -->
            <div class="col-md-4">
                <div class="card professor-card">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top professor-photo" alt="Professor 2">
                    <div class="card-body">
                        <h5 class="card-title">Profa. Maria Oliveira</h5>
                        <p class="card-text"><strong>Cargo:</strong> Professora Adjunta</p>
                        <p class="card-text"><strong>Área de Atuação:</strong> Inteligência Artificial</p>
                    </div>
                </div>
            </div>

            <!-- Professor 3 -->
            <div class="col-md-4">
                <div class="card professor-card">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top professor-photo" alt="Professor 3">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Carlos Pereira</h5>
                        <p class="card-text"><strong>Cargo:</strong> Professor Associado</p>
                        <p class="card-text"><strong>Área de Atuação:</strong> Sistemas Distribuídos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
