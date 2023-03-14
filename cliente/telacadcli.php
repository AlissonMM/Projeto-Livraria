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
    <h1 class="titulo">Database cliente</h1>
    <a class="gambiarra" href=databaseCliente.php><input type="" class="btn btn-primary"value="Clientes"></a>
    <h1 class="titulo">Cadastro cliente</h1>
    <div class="centralizar">
    <form action="inserirCliente.php" method="POST">
    <label for="cxnomecli" class="exampleFormControlInput1">Nome:</label>
        <input type="text" class="form-control" name="cxnomecli"><br/>
        <label for="cxtelcli" class="exampleFormControlInput1">Telefone:</label>
        <input type="text" class="form-control" name="cxtelcli"><br/>
        <label for="cxemailcli" class="exampleFormControlInput1">E-mail:</label>
        <input type="text" class="form-control" name="cxemailcli"><br/>
        <label for="cxdatanasc" class="exampleFormControlInput1">Data nascimento:</label>
        <input type="text" class="form-control" name="cxdatanasc"><br/>
        <label for="cxidade" class="exampleFormControlInput1">Idade:</label>
        <input type="text" class="form-control" name="cxidade"><br/>
        <label for="cxcidade" class="exampleFormControlInput1">Cidade:</label>
        <input type="text" class="form-control" name="cxcidade"><br/>
        <label for="cxcpf" class="exampleFormControlInput1">CPF:</label>
        <input type="text" class="form-control" name="cxcpf"><br/>
        
        <input type="submit" class="btn btn-primary"value="Cadastrar">
    </form><br>
    </div>
</main>
</body>
</html>
