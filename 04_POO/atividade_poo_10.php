<?php

class Carro{
    private $modelo;
    private $consumo;
    private $tanque;

    public function __construct($modelo, $consumo = 10, $tanque_inicial = 0){
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanque_inicial;
    }

    public function abastecer($litros){
        if($litros > 0){
            $this->tanque += $litros;
            echo "Foram abastecidos $litros litros <br>";
        }else{
            echo "Quantidade de combustível inválida <br>";
        }
    }

    public function  digirir($km){
        $litrosNecessarios = $km / $this->consumo;
        if($litrosNecessarios <= $this->tanque){
            $this->tanque -= $litrosNecessarios;
           echo "O carro $this->modelo percorreu $km km e consumiu" . number_format($litrosNecessarios, 2, ',',',') . "<br>" ;
        }else {
            echo "Combustível insuficiente para percorrer $km km <br>";
        }
    }
    public function exibir_Info(){
        echo "Modelo: $this->modelo <br> | Consumo: $this->consumo km/L | Tanque: " . number_format($this->tanque, 2, ',',',') . "<br>";
    }
}
$carro = new Carro("Honda Civic", 12, 20);
$carro->exibir_Info();
$carro->digirir(60);
$carro->abastecer(10);
$carro->exibir_Info();

?>