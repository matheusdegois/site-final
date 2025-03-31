<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetivo</title>
    <link rel="stylesheet" href="objetivo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
</head>

<body>

    <?php include("menu.php"); ?>

    <div class="container">
        <br>
        <h2 class="text-center">OBJETIVO</h2>
        <br>
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">PROJETO POLÍTICO DO CEEP</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
                <a href="PROJETOPOLÍTICO.pdf">
                    <div class="card " style="width: 500px; height: 500px;">
                        <iframe src="pdfprojeto.php" class="MostrarPdf"></iframe>
                    </div>
                </a>

            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">REGIMENTO ESCOLAR DO CEEP</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <iframe src="pdfregime.php" class="MostrarPdf"></iframe>
            </div>
        </div>
    </div>


    <?php include("footer.php"); ?>


</body>

</html>