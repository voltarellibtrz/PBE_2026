<?php

class Conta{
    public $titular;
    public $numero;
    public $saldo;
    public $tipo;

    function depositar($valor){
        $this->saldo = $this-> saldo + $valor;
        echo "o saldo aumentou para $this->saldo";
    }
    function sacar($valor){
        $this->saldo = $this-> saldo - $valor;
        echo "o saldo resultou em $this->saldo";
    }
    function consultarSaldo(){
        echo "o valor do saldo é de $this->saldo";
    }
}

$conta1 = new Conta();
$conta1->titular = "Beatriz Voltarelli";
$conta1->numero = "123";
$conta1->saldo = "300";
$conta1->tipo = "c/c";

$conta1 ->consultarSaldo();
$conta1->sacar(200);
$conta1 ->consultarSaldo();
echo "<br> Conta 02 <br>";

$conta2 = new Conta();
$conta2 ->titular = "José";
$conta2 ->numero = "312123";
$conta2 ->saldo= "5000";
$conta2 ->tipo = "c/c";

$conta2 ->consultarSaldo();
$conta2 ->depositar(100);
$conta2 ->consultarSaldo();

?>