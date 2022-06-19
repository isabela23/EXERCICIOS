<div class= "titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metro > Km</option>
        <option value="km-metro">Km > Metro</option>
        <option value="°C-°F">°C> °F</option>
        <option value="°F-C°">°F> °C</option>
    </select>
    <button> Calcular </button>
</form>

<style>
    form > *{
        font-size:1.5rem;
    }
</style>

<?php

const FATOR_KM_MILHA =  0.621371;
const FATOR_METRO_KM = 0.001;



if(isset($_POST['conversao']) and isset($_POST['param'])){
    $conversao = $_POST['conversao'];
    $param = $_POST['param'] ?? 0;
    

    switch($conversao){
        case "km-milha":
            $resultado =$param * FATOR_KM_MILHA ; 
            break;
        case "milha-km":
            $resultado=$param / FATOR_KM_MILHA ;
            break;
        case "metro-km":
            $resultado = $param * FATOR_METRO_KM ;
            break;
        case "km-metro":
            $resultado = $param / FATOR_METRO_KM ;
            break;
        case "°C-°F":
            $resultado = ($param*(9/5))+32;
            break;
        case "°F-C°":
            $resultado = ($param-32)*(5/9);
            break;
        default:
            $resultado = "Erro";
    }
    echo $resultado ;
}

