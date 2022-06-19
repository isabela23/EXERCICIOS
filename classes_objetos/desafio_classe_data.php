<div class = "titulo">Desafio Classe Data</div>

<?php
class Data{
    public $dia = '01';
    public $mes = '01';
    public $ano = '1970';

    public function apresentar(){
        return "{$this -> dia} / {$this -> mes} / {$this -> ano}";
    }
}

$data1 = new Data();
echo $data1 -> apresentar(), '<br>';

$data1 -> dia = 20;
$data1 -> mes =11;
$data1 -> ano = 2022;
echo $data1 -> apresentar(), '<br>';


