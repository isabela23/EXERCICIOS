<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href = "assets\css\estilo.css">
    <link rel="stylesheet" href = "assets\css\exercicio.css">
    <title>Exercício</title>
</head>
<body class ="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class = "navegacao">
        <a href = <?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class = "rosa">Sem formatacao</a>
        <a href = "index.php" class = "vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">     
            <?php
               // include($_GET['dir'] . "/".$_GET['file'].".php");
               include(__DIR__."/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    
    </main>
    <footer class="rodape">
        Isabela <?= date('Y'); ?>
            </footer>
</body>
</html>