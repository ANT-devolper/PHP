<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Divisão</title>
</head>
<body>
    <?php 
        $valor1 = $_GET['divi'] ?? 0;
        $valor2 = $_GET['divsor'] ?? 0;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="divi">Dividendo</label>
            <input type="number" name="divi" id="divi" value="<?= $valor1 ?>">
            <label for="divsor">Divisor</label>
            <input type="number" name="divsor" id="divsor" value="<?=$valor2?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>
        <table>
            <?php 
                echo "<tr>";
                echo "<td>$valor1</td>";
                echo "<td>$valor2</td></tr>";
                echo "<tr><td>";
                
            ?>
        </table>
    </section>
</body>
</html>