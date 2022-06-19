<div class= "titulo">Operadores Relacionais</div>

<?php
echo "<p>Operadores Relacionais</p><hr>";

$idade = 25;
if($idade <18){
    echo "Menor de idade = $idade anos<br>";
}else if($idade <=65) {
    echo "Adulto = $idade anos <br>";
}
else{
    "Terceira idade =$idade anos!<br>";
}
echo "<p>Spaceship</p><hr>";
var_dump(500<=>3);//1 se o primeiro paramentro maior q o segudo
var_dump(500<=>500);//Zero se forem iguais
var_dump(3<=>500);//-1 se o segundo for maior q o priemiro

?>

<style>
p{
    margin-bottom:-2px;
}
hr{
    margin-top:-2px; 
}
</style>