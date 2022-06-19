<div class = "titulo">Escopo</div>

<?php
function imprimirMensagem(){
    echo "Olá";
}

imprimirMensagem();
imprimirMensagem();

$variavel = 1;
echo "Fora da funçao $variavel<br>";

function trocaValor(){
    global $variavel;
    $variavel = 3;
    echo "Durante a função $variavel <br>";

}
trocaValor();
echo "Fora da funçao $variavel";