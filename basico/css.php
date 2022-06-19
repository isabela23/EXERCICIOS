<div class = "titulo"> Integração CSS </div>

<h1>
    <?php
    echo 'Ola';
    echo '<small>';
    echo ' Mundo!';
    echo '</small';
    ?>
</h1>

<?= "<div  azul >Outra forma de me expressar! </div>"; ?> 

<br>
<div center dobro><button >BOTÃO</button><? "Legal" ?> </button></div>

<style> 
    button {
        padding: 5px <?= 2*10 ?>px;
        background-color: #4286f4;
        color: #EEE;
        border-radius:10px;

    }
    [center]{
        display:flex;
        justify-content: center;
    }
    [azul]{
        color:#4286f4;
    }
    [dobro]{
        font-size:2rem;
    }
</style>