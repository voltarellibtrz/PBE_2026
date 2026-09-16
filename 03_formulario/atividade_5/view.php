<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body>
    <h1>Calcular IMC</h1>
    <form action="logica.php" method="POST">
        <label for="">Nome: </label>
        <input type="text" name="nome" >
        <br><br>
        <label for="">Peso em kg: </label>
        <input type="number" name="peso" step="0.01" >
        <br><br>
        <label for="">Altura em Metros: </label>
        <input type="number" name="altura" step="0.01">
        <br><br>
        <button type="submit">Calcular</button>
</body>
</html>