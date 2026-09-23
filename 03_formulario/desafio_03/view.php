<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03</title>
</head >
<body style="background-color:#FBF9F4; text-align:center">
    <img src="logo.png" width="20%" >
    <h2>Deseja comprar algum livro?</h2>
    <form action="logica.php" method="POST">
        <label for=""><b>Nome do cliente:</b> </label>
        <br>
        <input type="text" name="nome" >
        <br>
        <label for=""><b>Nome do Livro: </b></label>
        <br>
        <input type="text" name="livro" >
        <br>
        <label for=""><b>Autor: </b></label>
        <br>
        <input type="text" name="autor">
        <br>
        <label for=""><b>Gênero:</b></label>
        <br>
        <select name="genero1" required>
            <option value="">Selecione uma opção</option>
            <option value="romance">Romance</option>
            <option value="terror">Terror</option>
            <option value="suspense">Suspense/Policial</option>
            <option value="acao">Ação</option>
            <option value="fantasia">Fantasia</option>
            <option value="ficcao">Ficção Científica</option>
            <option value="aventura">Aventura</option>
        </select>
        <br><br>
        <label for=""><b>Adicionar Mais Livros: </b></label>
        <br>
        <select name="genero2" required>
            <option value="">Selecione uma opção</option>
            <option value="romance">Romance</option>
            <option value="terror">Terror</option>
            <option value="suspense">Suspense/Policial</option>
            <option value="acao">Ação</option>
            <option value="fantasia">Fantasia</option>
            <option value="ficcao">Ficção Científica</option>
            <option value="aventura">Aventura</option>
        </select>
        <br><br>
        <button type="submit">Comprar Livro(s)</button>


        <p><b></b>ATENÇÃO!</b>
        Ao comprar dois livros, um sendo de "Fantasia" e o outro sendo de "Ficção Científica", você GANHA um desconto de 25%!!!</p>
</body>
</html>