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
    <h1 class="titulo">Cadastro Funcionário</h1>
    <div class="centralizar">
    <form action="inserirFilme.php" method="POST">
    <label for="cxnome" class="exampleFormControlInput1">Nome:</label>
        <input type="text" class="form-control" name="cxnome"><br/>
        <label for="cxtel" class="exampleFormControlInput1">Telefone:</label>
        <input type="text" class="form-control" name="cxtel"><br/>
        <label for="cxemail" class="exampleFormControlInput1">E-mail:</label>
        <input type="text" class="form-control" name="email"><br/>
        <label for="cxperfil" class="exampleFormControlInput1">Perfil:</label>
        <input type="text" class="form-control" name="cxperfil"><br/>
        <label for="cxusu" class="exampleFormControlInput1">Usuario:</label>
        <input type="text" class="form-control" name="cxusu"><br/>
        <label for="cxsenha" class="exampleFormControlInput1">Senha:</label>
        <input type="text" class="form-control" name="cxsenha"><br/>
        <label for="cxperiodo" class="exampleFormControlInput1">Periodo:</label>
        <input type="text" class="form-control" name="cxperiodo"><br/>
        
        <input type="submit" class="btn btn-primary"value="Cadastrar">
    </form><br>
    </div>
</body>
</html>