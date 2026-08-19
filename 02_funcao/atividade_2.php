<?php
$preco = 50;
$qtd = 3;
$desconto = 10;
function calcularPrecoFinal($preco, $qtd, $desconto) {
    $total = $preco * $qtd;
    $totalDesconto = $total - ($total * $desconto/100);
    return "$totalDesconto";
}

$resultado =  calcularPrecoFinal($preco, $qtd, $desconto);
echo "Preço: $preco <br>";
echo "Quantidade: $qtd <br>";
echo "Desconto: $desconto <br>";
echo "Preço Final: $resultado";
?>