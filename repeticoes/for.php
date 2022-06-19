<div class = "titulo">For</div>

<?php
for($cont =1; $cont <= 5;$cont++){
    echo "$cont <br>";
}

echo "<hr>";

for(; $cont <= 10;$cont++){
    echo "$cont <br>";
}


$lista = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta','Sexta', 'Sábado'];
print_r($lista);

echo '<br>';
echo "<hr>";

for ($i=0;$i<count($lista);$i++){
    echo "{$lista[$i]} <br>";
}

echo "<hr>";
$matrix = [
    ['a','b','c'],
    ['d','e']
];

for($i = 0;$i <count($matrix);$i++){
    for($j=0;$j<count($matrix[$i]);$j++){
        echo "{$matrix[$i][$j]}";
    }
    echo '<br>';
}