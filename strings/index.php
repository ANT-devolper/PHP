<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h1>Diferença de aspas simples e duplas</h1>
    <h2>Aspas duplas</h2>
    <?php 
        $nome = "ANTONIO";

        echo "<p>Seu nome é $nome</p>";

        echo "<p>emoji mão \u{1F596}</p>";
    ?>
    <h2>Aspas simples</h2>
    <?php 
        $nome = 'ANTONIO';

        echo '<p>Seu nome é $nome</p>';
        echo '<p>Emoji mão \u{1D596}</p>';
    ?>
</body>
</html>