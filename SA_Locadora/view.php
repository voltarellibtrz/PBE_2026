<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Situação de aprendizagem</title>
    </head>
    <body>
        <h1>AutoFácil Locadora</h1>
        <h2>Sistema de Contrato de Locação</h2>
        <form action="logica.php" method="POST">
            <h2>Dados do Cliente</h2>
            <label>Nome: </label> <br>
            <input type="text" name="nome"> 
            <br>
            <label>Email: </label><br>
            <input type="email" name="email" >
            <br>
            <h2>Dados da Locação</h2>
            <label>Data de retirada: </label><br>
            <input type="date" name="retirada" required><br>
            <br>
            <label>Quantidade de Dias: </label><br>
            <input type="number" name="qtd" min="1" required><br>
            <br>
            <label>Categoria do Veículo: </label><br>
            <select name="categoria">
                <option value=""></option>
                <option value="economico">economico - R$100/dia</option>
                <option value="intermediario">intermediário - R$150/dia</option>
                <option value="SUV">SUV - R$250/dia</option> 
            </select> 
            <h2>Adicionais</h2>
            <label>Seguro Total (R$ 40,00/dia):</label><br>
            <input type="radio" name="adicionais" value="sim">
            <label for="">Sim</label>
            <input type="radio" name="adicionais" value="nao">
            <label for="">Não</label>
            <br><br>
            <label>GPS (R$ 15,00/dia):</label><br>
            <input type="radio" name="gps" value="sim">
            <label for="">Sim</label>
            <input type="radio" name="gps" value="nao">
            <label for="">Não</label>
            <br><br>
            <label>Carteirinha Infantil (R$ 20,00/dia):</label><br>
            <input type="radio" name="carteirinha" value="sim">
            <label for="">Sim</label>
            <input type="radio" name="carteirinha" value="nao">
            <label for="">Não</label>
            <br><br>
            <button type="submit">Gerar Contrato</button>
        </form>
    </body>
</html>