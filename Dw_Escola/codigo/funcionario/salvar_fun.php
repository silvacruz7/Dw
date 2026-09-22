<?php 

require_once "../conexao.php";

$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$email = $_GET['email'];

$sql = "INSERT INTO funcionario (nome, cpf, email)VALUES ('$nome', '$cpf', '$email');";

mysqli_query($conexao, $sql);

header("Location: cad_fun.php")
?>

<br><br>

<a href="../index.php">Início</a> <br><br>