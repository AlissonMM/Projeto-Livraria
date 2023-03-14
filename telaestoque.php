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
    <h1 class="titulo">Buscar livro</h1>
    <div class="centralizar">
    <form action="buscarLivro.php" method='post'>
         Digite o nome do filme:
         <input type="text" name="cxbuscalivro">
         <button type="submit"> Buscar</button><br><br>
        
         <h1 class="titulo">Lista livro</h1>
         Codigo livro:
       <input type="text" value="<?php
       echo $linha["cod"] ?>"><br>
        Nome livro:
       <input type="text" value="<?php
       echo $linha["ano"] ?>"><br>
       Genero:   
     <input type="text" value="<?php 
       echo $linha["produtora"] ?>"><br>
       Autor:
        <input type="text" value="<?php
        echo $linha["diretor"] ?>"><br>
       Quantidade:
       <input type="text" value="<?php
         echo $linha["genero"] ?>"><br>
       Editora:
       <input type="text" value="<?php
         echo $linha["genero"] ?>"><br>
       Data cadastro:
     <input type="text" value="<?php
      echo $linha["nota"] ?>"><br><br>
</form>
</div>
</body>
</html>