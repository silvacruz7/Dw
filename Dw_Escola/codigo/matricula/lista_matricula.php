<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h2>Lista de Matriculas</h2>

    <table>
        <tr>
            <td>Id Aluno:</td>
            <td>Id Curso:</td>
            <td>Data de Matrícula</td>
            <td>Id Funcionário</td>
            <td>ação</td>
        </tr>
        <?php
        require_once "../conexao.php";

        $sql = "SELECT * FROM matricula";

        $resultados = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_array($resultados)) {
            $id_aluno = $linha['id_aluno'];
            $id_curso = $linha['id_curso'];
            $data_matricula = $linha['data_matricula'];
            $id_funcionario = $linha['id_funcionario'];

            echo "<tr>";
            echo "<td>$id_aluno</td>";
            echo "<td>$id_curso</td>";
            echo "<td>$data_matricula</td>";
            echo "<td>$id_funcionario</td>";
            echo "<td><a href='excluir_matricula.php?data_matricula=$data_matricula'><img class='lixo' src='../imagens/lixeira.png'></a></td>";
            echo "</tr>";
        }


        ?>
    </table>

<br>

<a href="../index.php">Menu</a>
</body>

</html>