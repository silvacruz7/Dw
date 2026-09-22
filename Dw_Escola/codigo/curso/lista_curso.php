<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h2>Lista de Cursos</h2>

    <table>
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Carga Horária</td>
            <td>Id Professor</td>
            <td>ação</td>
        </tr>
        <?php
        require_once "../conexao.php";

        $sql = "SELECT * FROM curso";

        $resultados = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_array($resultados)) {
            $id_curso = $linha['id_curso'];
            $nome = $linha['nome'];
            $carga_horaria = $linha['carga_horaria'];
            $id_professor = $linha['id_professor'];

            echo "<tr>";
            echo "<td>$id_curso</td>";
            echo "<td>$nome</td>";
            echo "<td>$carga_horaria</td>";
            echo "<td>$id_professor</td>";
            echo "<td><a href='excluir_curso.php?id_curso=$id_curso'><img class='lixo' src='../imagens/lixeira.png'></a></td>";
            echo "</tr>";
        }


        ?>
    </table>

<br>

<a href="../index.php">Menu</a>
</body>

</html>