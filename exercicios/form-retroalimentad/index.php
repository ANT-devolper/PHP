<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form no php</title>
</head>
<body>
    <?php 
        $valor1 = $_GET['number1'] ?? 0;
        $valor2 = $_GET['number2'] ?? 0;
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="number1">Valor 1:</label>
            <input type="number" name="number1" id="number1" value="<?=$valor1?>">
            <label for="number2">Valor 2:</label>
            <input type="number" name="number2" id="number2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da soma</h2>
        <?php 
            $soma = $valor1 +$valor2;
            print "<p>A soma do valor $valor1 e o valor $valor2 é igual a <strong>$soma</strong></p>";
        ?>
    </section>
</body>
</html>