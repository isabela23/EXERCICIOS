<div class = "titulo"> Atribuições</div>

<?php
$numero =10;
$numero = $numero -1;

//Decremento
$numero--;
$numero -=5;

$variavel_inexistente = 'valor existente';
echo '<br>'. $variavel_inexistente;
$valor = $variavel_inexistente ?? 'valor default';

echo '<br>'. $valor;
