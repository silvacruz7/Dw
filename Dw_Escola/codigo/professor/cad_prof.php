<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Cadastro de Professor</h3>    

<form action="salvar_prof.php" method="GET">

    Nome: <br>
    <input type="text" name="nome">
    <br>

    Disciplina: <br>
    <input type="text" name="disciplina">
    <br>

    Salário: <br>
    <input type="text" name="salario">
    <br>

    Data de Contratação: <br>
    <input type="date" name="data_contratacao">
    <br>

    Email: <br>
    <input type="text" name="email">
    <br>

    <input type="submit" value="Cadastrar">

</form>

<br>

<a href="../index.php">Menu</a>

</body>
</html>