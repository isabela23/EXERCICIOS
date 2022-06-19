<div class = "titulo">Palindromo</div>

<?php


$palavra = "ISABELA";

function palindromo ($palavra){
    $ultimaIndice = strlen($palavra)-1;
    for($i = 0; $i <= $ultimaIndice;$i++){
        if ($palavra[$i] !== $palavra[$ultimaIndice-$i]){
            return "Não";
        }
    } return "Sim";
}
echo palindromo('arara').'<br>';

function palindromoSimples($palavra){
    return $palavra === strrev($palavra) ? 'Sim' :'Não';
}

echo palindromoSimples('arara').'<br>';











