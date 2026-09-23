<?php
$genero1 = $_POST['genero1'];
$genero2 = $_POST['genero2'];

echo $genero1;
echo "<br>";
echo $genero2;

function calculoDesconto($genero1, $genero2){
    if($genero1 == $genero2){
        return 10;
    }
    return 0;

}
$desconto = calculoDesconto($genero1, $genero2);


function valorLivro($genero){
    if($genero == "romance"){
        $preco = 120;
    }elseif($genero == "terror"){
        $preco = 300;
    }elseif($genero == "suspense"){
        $preco = 100;
    }elseif($genero == "acao"){
        $preco = 150;
    }elseif($genero == "fantasia"){
        $preco = 50;
    }elseif($genero == "ficcao"){
        $preco = 250;
    }elseif($genero == "aventura"){
        $preco = 200;
    }

    return $preco;
}
$preco1 = valorLivro($genero1);
$preco2 = valorLivro($genero2);
$precoTotal = 0;

if($preco1== 50 && $preco2 == 250) {
    $precoTotal = ($preco1 + $preco2)/ 25;
}

require_once 'view_relatorio.php';

?>