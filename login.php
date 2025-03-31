<?php
include("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Lista de Produtos</h2>
    <a class="btn btn-primary" href="formulario.php">Cadastrar</a>
    <br>
    <table class="table">
        <tr class="table-dark">
            <th>ID</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Categoria</th>
            <th>Situação</th>
            <th>Opções</th>
        </tr>
        <?php

         $sql = $conn->prepare("
            SELECT produtos.*, categorias.nome CAT 
            FROM produtos
            LEFT JOIN categorias on categorias.id = produtos.categoria_id
         ");
         $sql->execute();  
         while($dados = $sql->fetch(PDO::FETCH_ASSOC)
         ){      
        ?>
        <tr class="table-warning">
            <td><?php echo $dados['id'];?></td>
            <td><?php echo $dados['nome'];?></td>
            <td><?php echo $dados['valor'];?></td>
            <td><?php echo $dados['CAT'];?></td>
            <td><?php 
            if($dados['status'] == 1){
                echo "Ativo";
            } else {
                echo "Desativo";
            }
            ?></td>
            <td>

            <a class="btn btn-secondary btn-sm" href="formularioEditar.php?id=<?php echo $dados['id'];?>">
                Editar
            </a>    
            <a class="btn btn-danger btn-sm" href="deletarProduto.php?id=<?php echo $dados['id'];?>">
                Deletar
            </a></td>
        </tr>
        <?php } ?>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>