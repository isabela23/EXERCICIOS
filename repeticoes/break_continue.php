<div class = "titulo">Break & Continue</div>

<?php
for($cont=10;;$cont++){
    if($cont % 2 ===1) continue;
    echo "$cont <br>";
    if($cont>=30){
        break;
    }
}