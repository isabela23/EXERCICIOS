<div class = "titulo">Desafio Tabela 02</div>


<form action="#" method="post">
    <label>Linhas: </label>
    <input type="number" value=<?= $_POST['linha'] ?? 1 ?> name="linha">
    <label>Colunas: </label>
    <input type="number" value=<?= $_POST['coluna'] ?? 1 ?> name="coluna"><br>
    <button> Calcular </button>
</form>

<table>
    <?php for ($i=1; $i <= $_POST['linha'];$i++){
        $style = $i %2==0 ? "background-color: blue;" : '';
        echo "<tr style='{$style}'>";;
        for($j=1;$j <= $_POST['coluna'];$j++){
            $num = rand(1,50);
            $matrix[$i][$j] = $num;
            echo "<td>{$matrix[$i][$j]} </td>";
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
    form > *{
        font-size:1.5rem;
    }
</style>