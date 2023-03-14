<?php
if($_POST['cxnomecli'] != "")
{
 include_once "conexao.php";
 $nomecli = $_POST ['cxnomecli'];
 $telcli = $_POST ['cxtelcli'];
 $emailcli = $_POST ['cxemailcli'];
 $datanasc = $_POST ['cxdatanasc'];
 $idade = $_POST ['cxidade'];
 $cidade = $_POST ['cxcidade'];
 $cpf = $_POST ['cxcpf'];

 $query = "insert into tbUserCliente(nome_cliente,telefone_cliente,email_cliente,datanasc,idade,cidade,cpf) values('$nomecli','$telcli','$emailcli','$datanasc','$idade','$cidade','$cpf')";

 $sql = mysqli_query($conn, $query);

 echo "
 <script>
 alert('Dados cadastrados com sucesso');
 window.location.href='telacadcli.php'
 </script>
 ";
}
else
{
 echo "
 <script>
 alert('Dados incompletos!');
 window.location.href='telacadcli.php'
 </script>
 ";

}
?>