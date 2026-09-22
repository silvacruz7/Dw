<?php
require_once "../conexao.php";

$id_funcionario = $_GET['id_funcionario'];

$sql = "DELETE FROM funcionario WHERE id_funcionario = '$id_funcionario'";

mysqli_query($conexao, $sql);

header("Location: lista_fun.php");
exit;

?>