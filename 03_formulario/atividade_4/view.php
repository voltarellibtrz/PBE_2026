<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body>
    <h1>Calcular Média do Aluno</h1>
    <form action="logica.php" method="POST">
        <label for="">Nome do aluno: </label>
        <input type="text" name="nome" >
        <br><br>
        <label for="">Nota 1: </label>
        <input type="number" name="nota1" step="0.1" >
        <br><br>
        <label for="">Nota 2: </label>
        <input type="number" name="nota2" step="0.1">
        <br><br>
        <label for="">Nota 3: </label>
        <input type="number" name="nota3" step="0.1">
        <br><br>
        <button type="submit">Calcular Média</button>
    </form>
</body>
</html>