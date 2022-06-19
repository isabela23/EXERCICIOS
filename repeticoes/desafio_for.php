<div class = "titulo">Desafio For</div>

<?php

$lista = ['#','##','###','####','#####'];

for($i=0;$i<count($lista);$i++){
    echo "{$lista[$i]} <br>";
}

echo '<hr>';

for ($i=0;$i<count($lista);){
    if ($i==0) {
        echo "{$lista[$i]} <br>";
        $i=1;
    } else if ($i==1){
        echo "{$lista[$i]} <br>";
        $i=2;
    }
    else if ($i==2){
        echo "{$lista[$i]} <br>";
        $i=3;
    }
    else if ($i==3){
        echo "{$lista[$i]} <br>";
        $i=4;
    }
    else if ($i==4){
        echo "{$lista[$i]} <br>";
        $i=5;
    }
}