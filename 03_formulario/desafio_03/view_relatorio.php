<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
</head>
<body>
    <h1>Resumo da Compra</h1>
    <table border="1">
        <tr>
            <td>Cliente</td>
            <td>Nome do livro</td>
            <td>Nome do autor</td>
            <td>Gênero</td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <?php if($preco1== 50 && $preco2 == 250){
            ?>
                <td>Ganhou desconto!</td>

            <?php } ?>
        </tr>
    </table>
</body>
</html>