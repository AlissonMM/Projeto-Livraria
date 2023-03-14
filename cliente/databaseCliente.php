<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 class="titulo">Buscar cliente</h1>
    <div class="centralizar">
    <form action="buscarCliente.php" method='post'>
         Digite o nome do cliente:
         <input type="text" name="cxbuscacliente"><br/>
         <button type="submit"> Buscar</button><br><br>
         <h1 class="titulo">Lista de Clientes</h1>
         <?php 
     include_once "../php/conexao.php";
     // ele inclui o arquivo conexao.php
     $consultar = "select *from tbUserCliente";
     // a variavel consular da select na tabela cliente do mysql
     $executar = mysqli_query($conn, $consultar);
     // ele chama o comando do php de banco de dados
    ?>
    <?php
    while($linha = mysqli_fetch_array($executar))
    { 
      ?> 
        Codigo:
         <input type="text" value="<?php
         echo $linha["codigo_cliente"] ?>"><br>
        Nome:
         <input type="text" value="<?php
         echo $linha["nome_cliente"] ?>"><br>
        Telefone:
         <input type="text" value="<?php
         echo $linha["telefone_cliente"] ?>"><br>
        Email:   
       <input type="text" value="<?php 
         echo $linha["email_cliente"] ?>"><br>
        Data de Nascimento:
          <input type="text" value="<?php
          echo $linha["datanasc"] ?>"><br>
        Idade:
         <input type="text" value="<?php
           echo $linha["idade"] ?>"><br>
        Cidade:
       <input type="text" value="<?php
        echo $linha["cidade"] ?>"><br>
        CPF:
       <input type="text" value="<?php
        echo $linha["cpf"] ?>"><br><br>
          <?php
         // ele cria o botao e escreve na linha
      }
       ?>
</body>
</html>