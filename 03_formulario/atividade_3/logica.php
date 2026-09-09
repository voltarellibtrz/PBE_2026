<?php
$numero = $_POST['numero'];
$numero2 = $_POST['numero2'];
$operacao = $_POST['operacao'];

echo $numero . "<br>";
echo $numero2 . "<br>";
echo $operacao . "<br>";

if($operacao == "+"){
    echo $numero + $numero2;
}elseif($operacao == "-"){
    echo $numero - $numero2;
}elseif($operacao == "*"){
    echo $numero * $numero2;
}elseif($operacao == "/"){
    if($numero2 == 0){
        echo "Número não pode ser dividido por 0";
    }else{
        echo $numero/$numero2;
    }
}else{
    echo "Selecione uma operação";
}
?>
