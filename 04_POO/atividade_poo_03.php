<?php

class Aula{
    public $disciplina;
    public $professor;
    public $duracao;
    public $n_sala;
    public $bloco;

    function exibirInformações(){
        echo "Disciplina: $this->disciplina <br>";
        echo "Professor: $this->professor <br>";
        echo "Duração: $this->duracao <br>";
        echo "Número da sala: $this->n_sala <br>";
        echo "Bloco: $this->bloco";
    }

    function trocarProfessor($nome_professor){
        $this->professor = $nome_professor;
        echo "O novo professor é $this->professor <br>";
    }

    function alterarLocal($novo_bloco, $novo_numero_sala){
        $this->n_sala = $novo_numero_sala;
        $this->bloco = $novo_bloco;

        echo "O novo local é $this->bloco $this->n_sala";
    }
}

$aula1 = new Aula();
$aula1->disciplina = "Matemática";
$aula1->professor = "Ana Paula";
$aula1->duracao = 4;
$aula1->n_sala = 2;
$aula1->bloco = "Anexo";

$aula1 ->exibirInformações();
echo "<hr>";
$aula1 ->trocarProfessor("Marcela");
echo "<hr>";
$aula1 ->alterarLocal("B", 10);
echo "<hr>";
$aula1 ->exibirInformações();

echo "<br><br>";

$aula2 = new Aula();
$aula2->disciplina = "Portugues";
$aula2->professor = "Michele";
$aula2->duracao = 8;
$aula2->n_sala = 2;
$aula2->bloco = "B";

$aula2 ->exibirInformações();
echo "<hr>";
$aula2 ->trocarProfessor("Tadeu");
echo "<hr>";
$aula2 ->alterarLocal("A", 5);
echo "<hr>";
$aula2 ->exibirInformações();

?>