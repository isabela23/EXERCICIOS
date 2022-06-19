<div class = "titulo">Argumentos e Retorno</div>

<?php
function obterMensagem(){
    return 'Seja bem vindo(a)';
}
obterMensagem();

$mensagem = obterMensagem();
echo $mensagem;

function obterMensagemComNome($nome){
    return "Bem vindo, {$nome}!";
}


echo '<br>'.obterMensagemComNome('Isabela');

function soma($a,$b){
    return $a+$b;
}
echo '<br>'.soma(1,2);


