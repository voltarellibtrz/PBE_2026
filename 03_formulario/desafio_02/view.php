<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio_02</title>
</head>
<body>
    <h1>Carrinho de Compras</h1>
    <form action="logica.php" method="POST">
        <h2>Dados do Cliente</h2>
        <label for="">Nome: </label>
        <br>
        <input type="text" name="nome_cliente">
        <br>
        <h2>Produto 1</h2>
        <label for="">Nome do Produto: </label>
        <br>
        <input type="text" name="produto1">
        <br><br>
        <label for=" ">Preço: </label>
        <br>
        <input type="number" name="preco1">
        <br><br>
        <label for=" ">Quantidade: </label>
        <br>
        <input type="number" name="quantidade1">
        <br><br>
        <h2>Produto 2</h2>
        <label for="">Nome do Produto: </label>
        <br>
        <input type="text" name="produto2">
        <br><br>
        <label for=" ">Preço: </label>
        <br>
        <input type="number" name="preco2">
        <br><br>
        <label for=" ">Quantidade: </label>
        <br>
        <input type="number" name="quantidade2">
        <br><br>
        <h2>Produto 3</h2>
        <label for="">Nome do Produto: </label>
        <br>
        <input type="text" name="produto3">
        <br><br>
        <label for=" ">Preço: </label>
        <br>
        <input type="number" name="preco3">
        <br><br>
        <label for=" ">Quantidade: </label>
        <br>
        <input type="number" name="quantidade3">
        <br><br>
        <button type="submit">Finalizar Compra</button>
</body>
</html>