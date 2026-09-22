<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h2>Lista de Professor</h2>

    <table>
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Disciplina</td>
            <td>Salário</td>
            <td>Data de Contrato</td>
            <td>Email</td>
            <td>Ação</td>
        </tr>
        <?php
        require_once "../conexao.php";

        $sql = "SELECT * FROM professor";

        $resultados = mysqli_query($conexao, $sql);

        //quebra a variável $resultados em linhas (vetores/array)
        while ($linha = mysqli_fetch_array($resultados)) {
            $id_professor = $linha['id_professor'];
            $nome = $linha['nome'];
            $disciplina = $linha['disciplina'];
            $salario = $linha['salario'];
            $data_contratacao = $linha['data_contratacao'];
            $email = $linha['email'];

            echo "<tr>";
            echo "<td>$id_professor</td>";
            echo "<td>$nome</td>";
            echo "<td>$disciplina</td>";
            echo "<td>$salario</td>";
            echo "<td>$data_contratacao</td>";
            echo "<td>$email</td>";
            echo "<td><a href='excluir_professor.php?id_professor=$id_professor'><img class='lixo' src='../imagens/lixeira.png'></a></td>";
            echo "</tr>";
        }


        ?>
    </table>

<br>

<a href="index.php">Menu</a>
</body>

</html>