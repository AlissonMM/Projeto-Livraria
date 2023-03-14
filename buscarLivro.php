<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar dados</title>
</head>
<body>
    <?php 
     include_once "conexao.php";
     // ele inclui o arquivo conexao.php
     $nome = $_POST["cxbuscafilme"];
     $consultar = "select * from tbfilmes where nome LIKE '%$nome%'";
     // a variavel consular da select na tabela cliente do mysql
     $executar = mysqli_query($conn, $consultar);
     $resultado = mysqli_num_rows($executar);
     // ele chama o comando do php de banco de dados
 if ($resultado != 0)
 {
    echo "<script>alert('Filme localizado') </script>";
 }
 else {
    echo "<script>alert('Filme não localizado'); 
    window.location.href='index.php' </script>";
 }
    ?>
    <?php
    while($linha = mysqli_fetch_array($executar))
    { 
    ?> 
       Codigo:
       <input type="text" value="<?php
       echo $linha["cod"] ?>"><br>
        Nome:
       <input type="text" value="<?php
       echo $linha["nome"] ?>"><br>
       Ano:
       <input type="text" value="<?php
       echo $linha["ano"] ?>"><br>
       Produtora:   
     <input type="text" value="<?php 
       echo $linha["produtora"] ?>"><br>
        Diretor
        <input type="text" value="<?php
        echo $linha["diretor"] ?>"><br>
       Genero:
       <input type="text" value="<?php
         echo $linha["genero"] ?>"><br>
        Nota:
     <input type="text" value="<?php
      echo $linha["nota"] ?>"><br><br>
        <?php
       // ele cria o botao e escreve na linha
    }
     ?>
    
</body>
</html>