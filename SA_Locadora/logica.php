<?php
// Beatriz Voltarelli de Oliveira
// Brenda Bonardi Wolf
$nome = $_POST["nome"];
$email = $_POST["email"];
$retirada = $_POST["retirada"];
$qtd = $_POST["qtd"];
$categoria = $_POST["categoria"];
$carteirinha = $_POST["carteirinha"];
$adicionais = $_POST['adicionais'];
$gps = $_POST['gps'];

// PASSO 1
function calcularSubtotal($diaria,$dias){
    $resultado = $diaria * $quantidade_dias;
    return $resultado;

}

// PASSO 2
function calcularPercentualDesconto($dias){
    if($qtd = 1 && 6){
         $porcentagem_desconto = 0;
    }
    elseif($qtd = 7 && 14 ){
        $porcentagem_desconto = $qtd / 100;
    }
    else($qtd = 15){
         $porcentagem_desconto = $qtd / 100;
    }
    return $porcentagem_desconto;
}

// PASSO 3
if ($categoria == "SUV"){
    $diaria = 250;
}
elseif ($categoria == "intermediario"){
    $diaria = 150;
}else($categoria == "economico"){
    $diaria = 100;
}

// PASSO 4
$subtotalAdicionais = 0;
if ($adicionais == 'sim'){
    $subtotalAdicionais += 40;
}

if($gps = "sim"){
    $subtotalAdicionais += 15;
}
if($carteirinha = "sim"){
    $subtotalAdicionais += 20;
}

//PASSO 5
$subtotal = calcularSubtotal($diaria, $dias);
$subtotalAdicioanis = calcularSubtotal($subtotalAdicioanis, $dias);
$total= $subtotal + $subtotalAdicionais;

$valorDesconto = $categoria 


require_once = "view.relatorio.php";

?>