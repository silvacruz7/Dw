<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Cadastro de Curso</h3>

    <form action="salvar_curso.php" method="GET">

        Nome: <br>
        <input type="text" name="nome">
        <br>

        Carga Horária: <br>
        <input type="text" name="carga_horaria">
        <br>

        Professor: <br>
        <select name="id_professor">
            <?php
            require_once "../conexao.php";

            $sql = "SELECT * FROM professor";
            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $id_professor = $linha['id_professor'];
                $nome = $linha['nome'];

                echo "<option value='$id_professor'>$nome</option>";
            }
            ?>
        </select> <br>

        <input type="submit" value="Cadastrar">

    </form>

</body>

<br>

<a href="../index.php">Menu</a>

</html>