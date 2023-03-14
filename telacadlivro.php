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
    <h1 class="titulo">Cadastro livro</h1>
    <div class="centralizar">
    <form action="inserirlivro.php" method="POST">
    <label for="cxnomeli" class="exampleFormControlInput1">Livro:</label>
        <input type="text" class="form-control" name="cxnomeli"><br/>
        <label for="cxquant" class="exampleFormControlInput1">Quantidade:</label>
        <input type="text" class="form-control" name="cxquant"><br/>
        <label for="cxautor" class="exampleFormControlInput1">Autor:</label>
        <input type="text" class="form-control" name="cxautor"><br/>
        <label for="cxgenero" class="exampleFormControlInput1">Genero:</label>
        <input type="text" class="form-control" name="cxgenero"><br/>
        <label for="cxeditora" class="exampleFormControlInput1">Editora:</label>
        <input type="text" class="form-control" name="cxeditora"><br/>
        <label for="cxdatacadli" class="exampleFormControlInput1">Data cadastro:</label>
        <input type="text" class="form-control" name="cxdatacadli"><br/>

        <input type="submit" class="btn btn-primary"value="Cadastrar">
    </form><br>
    </div>
</body>
</html>

