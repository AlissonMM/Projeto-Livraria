<?php
if($_POST['cxnomeli'] != "")
{
 include_once "conexao.php";
 $nomeli = $_POST ['cxnomeli'];
 $quant = $_POST ['cxquant'];
 $autor = $_POST ['cxautor'];
 $genero = $_POST ['cxgenero'];
 $editora = $_POST ['cxeditora'];
 $datacadli = $_POST ['cxdatacadli'];

 $query = "insert into tbCadLivro(nome_livro,quantidade,autor,genero,editora,datacadastro) values('$nomeli','$quant','$autor','$genero','$editora','$datacadli')";

 $sql = mysqli_query($conn, $query);

 echo "
 <script>
 alert('Dados cadastrados com sucesso');
 window.location.href='telacadlivro.php'
 </script>
 ";
}
else
{
 echo "
 <script>
 alert('Dados incompletos!');
 window.location.href='telacadlivro.php'
 </script>
 ";

}
?>