<?php
require_once "funcao.php";

$resultado = calcularPedido("Mouse", 200, 5, 20, 70);
echo "Nome: ". $resultado["nomeProduto"]. "<br>";
echo "SubTotal: ". $resultado ['subTotal']. "<br>";
echo "Desconto: ". $resultado ['valorDesconto']. "<br>";
echo "Imposto: ". $resultado ['valorImposto']. "<br>";
echo "Total: ". $resultado ['totalFinal']. "<br>";

$totalComFrete = calcularFrete($resultado['totalFinal']);
echo "Total com Frete: ". $totalComFrete;
?>