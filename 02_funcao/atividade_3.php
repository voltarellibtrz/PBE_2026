<?php
function analisarNumero($numero){
    $dobro = $numero* 2;
    $triplo = $numero*3;
    $quadrado = $numero**2;
    if($numero > 0){
        $situacao = "Positivo";
    } else{
        $situacao = "Negativo";
    }
    return[
        "numero" => $numero,
        "dobro" => $dobro,
        "triplo" => $triplo,
        "quadrado" => $quadrado,
        "situacao" => $situacao
    ];
}
$numero_enviado = 15;
$resultado =  analisarNumero($numero_enviado);
echo "Numero: ". $resultado['numero'] ."<br>";
echo "Dobro:  " .$resultado['dobro'] ."<br>";
echo "Triplo: ". $resultado['triplo']  ."<br>";
echo "Quadrado: ". $resultado['quadrado'] ."<br>";
echo "Situação: ". $resultado['situacao'] ;

?>
