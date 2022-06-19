<div class = "titulo">Primeira Classe</div>

<?php
class Cliente{
    //atributos
    //public significa que o atributo pode ser visto fora do escopo da classe
    public $nome = "Anônimo";
    public $idade = 18;

    //Metodos
    public function apresentar(){
        return "Nome: {$this -> nome} - Idade:{$this -> idade}<br>";

    }
}
// O new cria uma nova instancia (objeto) daquela classe 
$c1 = new Cliente();
$c1 -> nome = 'Isabela';
$c1 -> idade = 24;
echo $c1 -> apresentar();

$c2 = new Cliente();
$c2 -> nome = 'Joao';
$c2 -> idade = 26;
echo $c2 -> apresentar();



