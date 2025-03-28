<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTATO</title>
    <link rel="stylesheet" href="contato.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <link rel="stylesheet" href="contato.css">
</head>

<body>
    <?php
    include("menu.php");
    ?>


    <div class="container">
        <div class="row">
            <div>
                <h3 class="text-center" id="FALE">FALE CONOSCO</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
       
        <div class="contact-info col-6">
            <p><strong>Endereço:</strong> R. Cel. Guilherme de Paula, 1937-1967 - Centro, Laranjeiras do Sul - PR, 85301-404</p>
            <p><strong>Telefone:</strong> (11) 1234-5678</p>
            <p><strong>E-mail:</strong><a href="mailto:ljsceeplaranjeiras@seed.pr.gov.br"> ljsceeplaranjeiras@seed.pr.gov.br</a></p>

            <div class="contact-form ">
            <h2>Envie sua Mensagem</h2>
            <form action="#" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required placeholder="Digite seu nome">

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required placeholder="Digite seu e-mail">

                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="5" required placeholder="Escreva sua mensagem"></textarea>

              <div class="w-100 text-center">

              <button type="submit" class="bg-success">Enviar Mensagem</button>
              </div>

            </form>

        </div >
        </div>



        <div class="col-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.1198739497586!2d-52.4206859!3d-25.400797700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94efcb1205ab6b87%3A0x4c6769f192dbec61!2sCEEP%20Prof%C2%AA.%20Naiana%20Bavaresco%20Souza%20-%20Escola%20T%C3%A9cnica%20de%20Laranjeiras%20do%20Sul%20-%20PR!5e0!3m2!1spt-BR!2sbr!4v1743038232948!5m2!1spt-BR!2sbr" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
    
        
    </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <?php include("footer.php"); ?>


</body>

</html>