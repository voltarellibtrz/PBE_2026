<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="logica.php" method="POST">
        <label for="">Primeiro Número:</label>
        <input type="number" name="numero">
        <br><br>
        <label for="">Segundo Número:</label>
        <input type="number" name="numero2">
        <br><br>
        <select name="operacao" required>
            <option value="">Selecione uma operação</option>
            <option value="+">Soma</option>
            <option value="-">Subtração</option>
            <option value="*">Multiplicação</option>
            <option value="/">Divisão</option>
        </select>
        <br><br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>