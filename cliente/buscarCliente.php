<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <main>
    <?php 
     include_once "../php/conexao.php";
     // ele inclui o arquivo conexao.php
     $nome = $_POST["cxbuscacliente"];
     $consultar = "select * from tbUserCliente where nome_cliente LIKE '%$nome%'";
     // a variavel consular da select na tabela cliente do mysql
     $executar = mysqli_query($conn, $consultar);
     $resultado = mysqli_num_rows($executar);
     // ele chama o comando do php de banco de dados
 if ($resultado != 0)
 {
    echo "<script>alert('Cliente localizado') </script>";
 }
 else {
    echo "<script>alert('Cliente não localizado'); 
    window.location.href='.php' </script>";
 }
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
     </main>
    
</body>
</html>
