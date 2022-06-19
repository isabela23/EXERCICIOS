<div class = "titulo">While/Do While</div>

<?php
const VALOR_LIMITE = 5;
$contador = 0;


echo '<h3>While</h3>';

while($contador < VALOR_LIMITE){
    echo "while $contador <br>";
    $contador++;
}

echo '<h3>Do While</h3>';

do{
    echo "while $contador <br>";
    $contador++;
}while($contador < VALOR_LIMITE);
