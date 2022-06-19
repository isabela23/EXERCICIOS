<div class = "titulo">Desafio Tabela</div>

<?php
$matriz = [
    ['01', '02','03','04','05'],
    ['01', '02','03','04','05'],
    ['01', '02','03','04','05'],
    ['01', '02','03','04','05'],
];

foreach($matriz as $linha){
    foreach($linha as $valor){
        echo "$valor ";
    }
    echo "<br>";
}
?>

<table>
    <?php foreach($matriz as $linha){
        echo "<tr>";
        foreach($linha as $valor){
            echo "<td> $valor </td>";
        } 
        echo "</tr>";
    }?>
</table>

<table>
    <?php foreach($matriz as $indice => $linha){
        $style = $indice %2==0 ? "background-color: blue;" : '';
        echo "<tr style='{$style}'>";
        foreach($linha as $valor){
            echo "<td> $valor </td>";
        } 
        echo "</tr>";
    }?>
</table>

<style>
    table{
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;

    }
    table tr{
        border: 1px solid #444;
    }
    table td{
        padding: 10px 20px;
    }
</style>