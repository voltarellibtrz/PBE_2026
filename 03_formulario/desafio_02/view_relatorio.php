<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
</head>
<body>
    <h1>Resumo da Compra</h1>
    <p><b>Cliente:</b> <?= $nome ?></p>

    <table border="1">
        <thead>
            <tr>
                <td><b>Produto</b></td>
                <td><b>Preço</b></td>
                <td><b>Quantidade</b></td>
                <td><b>Subtotal</b></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?= $produto['nome']?></td>
                <td><?= $produto['preco']?></td>
                <td><?= $produto['quantidade']?></td>
                <td><?= $produto['subtotal']?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <br>
    <p><b>Desconto:</b> <?= $valorDesconto ?></p>
    <?php if($desconto > 0): ?>
        <h2>Parabéns você ganhou um desconto!!!!!!</h2>
    <?php endif ?>
    <h2>Total da Compra <?= $total ?></h2>
</body>
</html>