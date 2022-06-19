<div class="titulo">Conversões</div>
<?php
echo is_int(PHP_INT_MAX);

// INT PARA FLOAT
echo '<br>';
var_dump(PHP_INT_MAX +1);
echo '<br>';
var_dump((float) 3);

//operações com string
echo '<p> Strings </p>';
echo '<br>';
//O PHP consegue fazer essa soma e tranforma para int
var_dump(3+"2");
echo '<br>';
//Faz a concatenação
var_dump(3 . "2");
echo '<br>';

//Ignora o "cinco"
var_dump(3 + "2 cinco ");