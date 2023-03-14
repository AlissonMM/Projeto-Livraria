<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>
<h1 class="titulo">Buscar pedido</h1>
    <div class="centralizar">
    <form action="buscarLivro.php" method='post'>
         Digite o codigo do cliente ou livro:
         <input type="text" name="cxbuscafilme">
         <button type="submit"> Buscar</button><br><br>
         <h1 class="titulo">Pedidos</h1>
       Codigo livro:
       <input type="text" value="<?php
       echo $linha["cod"] ?>"><br>
        Nome livro:
       <input type="text" value="<?php
       echo $linha["nome"] ?>"><br>
       Codigo cliente:
       <input type="text" value="<?php
       echo $linha["ano"] ?>"><br>
       Nome cliente:   
     <input type="text" value="<?php 
       echo $linha["produtora"] ?>"><br>
       Data retiro
        <input type="text" value="<?php
        echo $linha["diretor"] ?>"><br>
       Data devolução:
       <input type="text" value="<?php
         echo $linha["genero"] ?>"><br>
       Multa:
     <input type="text" value="<?php
      echo $linha["nota"] ?>"><br><br>

    
</body>
</html>