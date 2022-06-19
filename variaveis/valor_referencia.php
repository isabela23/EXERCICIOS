<div class = "titulo">Valor vs Referência</div>

<?php

$variavel = 'Valor Inicial';

// Atribuição por valor 
$variavelValor = $variavel;
echo "<br>$variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavel";
echo " $variavelValor";

//Atribuição por referencia 
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma Referencia';
echo "<br> $variavel $variavelReferencia";


