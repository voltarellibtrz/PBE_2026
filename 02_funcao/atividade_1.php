<?php
$idade1 = 15;
$idade2 = 18;
$idade3 = 25;

function verificarIdade($idade) {
    if($idade >= 18)
        return "Maior de idade";
    elseif ($idade < 18)
        return "Menor de idade";
}
$resposta = verificarIdade($idade1);
echo $resposta;
echo "<br>";
$resposta = verificarIdade($idade2);
echo $resposta;
echo "<br>";
$resposta = verificarIdade($idade3);
echo $resposta;
?>