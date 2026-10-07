<?php

class Livro{
    public $titulo;
    public $autor;
    public $paginas;
    public $ano_publicacao;

    public function __construct($titulo, $autor, $paginas, $ano_publicacao = "Desconhecido"){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->ano_publicacao = $ano_publicacao;
    }

    public function exibirDetalhes(){
        echo "Título: $this->titulo, Autor: $this->autor, Páginas: $this->paginas, Ano de Publicação: $this->ano_publicacao";
        echo "<hr>";
    }
}

$livro = new Livro("A culpa é das estrelas", "John Green", 196, "2012");
$livro->exibirDetalhes();

$livro2 = new Livro("Diário de uma Paixão", "Nicholas Sparks", 176, "2017");
$livro2->exibirDetalhes();

?>