<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="stylesheet" href="cursos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<?php
    include("menu.php");
    ?>
    <div class="container">
    <div class="container">
        <div class="row">
            <div>
                <h3 class="text-center" >SUBSEQUENTE</h3>
            </div>
        </div>
    </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Card 1 -->
            <div class="col">
                <div class="card">
                    <img src="enfermagem.jpg" class="card-img-top" alt="Curso 1">
                    <div class="card-body">
                    Forma profissionais para cuidar da saúde, administrar medicamentos e prevenir doenças.
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col">
                <div class="card">
                    <img src="sistemas.jpg" class="card-img-top" alt="Curso 2">
                    <div class="card-body">
                        <p class="card-text">Capacita para criar, programar e gerenciar softwares e sistemas informáticos.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <div class="card">
                    <img src="edificacoes.jpg" class="card-img-top" alt="Curso 3">
                    <div class="card-body">
                        <p class="card-text">Prepara para o planejamento, execução e fiscalização de obras civis e construção de infraestrutura.</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col">
                <div class="card">
                    <img src="eletrotecnica.jpg" class="card-img-top" alt="Curso 4">
                    <div class="card-body">
                        <p class="card-text">Aprenda as melhores práticas para planejar e gerenciar projetos de sucesso.</p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col">
                <div class="card">
                    <img src="estetica.jpg" class="card-img-top" alt="Curso 5">
                    <div class="card-body">
                        <p class="card-text"> Ensina técnicas de cuidados de beleza e tratamentos estéticos, promovendo bem-estar e autoestima.</p>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col">
                <div class="card">
                    <img src="farmacia.jpg" class="card-img-top" alt="Curso 6">
                    <div class="card-body">
                       
                        <p class="card-text">Forma profissionais para o controle, manipulação e aconselhamento sobre medicamentos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php");?>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
