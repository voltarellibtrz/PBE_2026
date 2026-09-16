<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 5</title>
</head>
<body>
    <h1>Resultado do IMC</h1>
    <p><b>Nome: </b>  <?= $nome ?> </p>
    <p><b>Peso em kg: </b>  <?= $peso ?> </p>
    <p><b>Altura: </b>  <?= $altura ?> </p>
    <p><b>IMC: </b> <?= $IMC ?></p>

    <?php if($IMC < 18.5): ?>
        <p>Abaixo do peso</p>
    <?php elseif($IMC >= 18.5 && $IMC < 24.9): ?>
        <p>Peso Normal</p>
    <?php elseif($IMC >= 25 && $IMC < 29.9): ?>
        <p>Sobrepeso</p>
    <?php else: ?>
        <p>Obesidade</p>
        <?php endif ?>

</body>
</html>