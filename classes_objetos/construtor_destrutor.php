<div class = "titulo">Construtor e Destrutor</div>

<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18){
        echo "Construtor invocado! <br>";
        $this -> nome = $novoNome;
        $this -> idade =$idade;
    }

    function __destruct(){
        echo "E morreu <br>";
    }

    public function apresentar(){
        echo "{$this -> nome}, tem {$this -> idade} anos.<br>";
    }
}

$pessoaA = new Pessoa('Isabela', 22);
$pessoaA -> apresentar();
unset($pessoaA);

$pessoaB = new Pessoa('Isabela', 22);
$pessoaB -> apresentar();
$pessoaB = NULL;