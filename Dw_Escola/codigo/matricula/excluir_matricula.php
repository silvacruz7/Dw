<?php
require_once "../conexao.php";

$data_matricula = $_GET['data_matricula'];

$sql = "DELETE FROM matricula WHERE data_matricula = '$data_matricula'";

mysqli_query($conexao, $sql);

header("Location: lista_matricula.php");
exit;
