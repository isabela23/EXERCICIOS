<div class= "titulo">Desafio PI</div>

<?php
echo pi();

$pi = 3.14;

echo "<br>  $pi <br> ";

if(pi()==$pi){
    echo "Iguais!<br>";
} else if (number_format(pi(),2) == $pi){
    echo "Iguais! <br>";
} else {
    echo "Diferentes";
}

if($pi - pi() <= 0.01){
    echo "<br> Praticamente iguais";
} else {
    echo "ERRADO";
}