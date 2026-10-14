<?php

class Filme{
    private $titulo;
    private $genero;
    private $duracao;
    private $assistido;

    public function __construct($titulo, $genero, $duracao, $assistido = False ){
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->duracao = $duracao;
        $this->assistido = $assistido;
    }

    public function marcarComoAssistido(){
        $this->assistido = True;
    }

    public function foiAssistido(){
        if($this->assistido = true){
            echo "Você já assistiu";
        }else{
            echo "Você ainda não assistiu";
        }
    }

    public function exibirInformacoes(){
        echo "Título: $this->titulo <br>" . "Gênero: $this->genero <br>" . "Duração: $this->duracao <br>" . "Assistido: $this->assistido <br>" ;

    }
}

$filme1 = new Filme("Matrix", "Ficcção", 145, true);
$filme1->exibirInformacoes();


?>