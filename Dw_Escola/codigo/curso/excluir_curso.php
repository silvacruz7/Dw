<?php
require_once "../conexao.php";

$id_curso = $_GET['id_curso'];

$sql = "DELETE FROM curso WHERE id_curso = '$id_curso'";

mysqli_query($conexao, $sql);

header("Location: lista_curso.php");
exit;

?>