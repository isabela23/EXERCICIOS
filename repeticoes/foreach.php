<div class = "titulo">Foreach</div>

<?php
$lista = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta','Sexta', 'Sábado'];

foreach($lista as $valor){
    echo "$valor <br>";
}

foreach($lista as $indice => $valor){
    echo "$indice => $valor <br>";
}

echo "<hr>";
$matrix = [
    ['a','b','c'],
    ['d','e']
];

foreach($matrix as $linha){
    foreach($linha as $valor){
        echo "$valor";
    }
    echo '<br>';
}

