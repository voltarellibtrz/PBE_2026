<?php
$frequencia1 = 90;
$nota1 = 9;

echo "Leonardo - ";
if($frequencia1 < 75) { // Frequência insuficiente
    echo "Reprovado por falta";
}
elseif ($nota1 >= 7) { // Maior que 7 aprovado
    echo "Aprovado";
}
elseif ($nota1 >= 5) { // Nota: entre 5 e 6.9 = recuperação
    echo "Recuperação";
}
else{ // Media insuficiente reprovado
    echo "Reprovado";
}

$frequencia2 = 70;
$nota2 = 9;
echo "<br>";
echo "José - ";
if($frequencia2 < 75) { // Frequência insuficiente
    echo "Reprovado por falta";
}
elseif ($nota2 >= 7) { // Maior que 7 aprovado
    echo "Aprovado";
}
elseif ($nota2 >= 5) { // Nota: entre 5 e 6.9 = recuperação
    echo "Recuperação";
}
else{ // Media insuficiente reprovado
    echo "Reprovado";
}

$frequencia3 = 90;
$nota3 =3;
echo "<br>";
echo "Roberto - ";
if($frequencia3 < 75) { // Frequência insuficiente
    echo "Reprovado por falta";
}
elseif ($nota3 >= 7) { // Maior que 7 aprovado
    echo "Aprovado";
}
elseif ($nota3 >= 5) { // Nota: entre 5 e 6.9 = recuperação
    echo "Recuperação";
}
else{ // Media insuficiente reprovado
    echo "Reprovado";
}
?>