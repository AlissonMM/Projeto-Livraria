<?php
$server = "localhost";
//server do banco de dados
$user = "root";
// usuario
$password = "root";
// senha
$dbname = "bdBiblioteca";
// nome da biblioteca
$conn = mysqli_connect($server,$user,$password,$dbname);
// chama o php pronto para conectar com bando de dados, e utiliza as informações acima(server,user,passoword,dbname)
?>