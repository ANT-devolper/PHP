<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constante</title>
</head>
<body>
    <h1>Uso de constante</h1>
    <p>
        <?php 
            const TIME = "Winter blue \u{1f499}";

            echo "Eu adoro o ". TIME;

        ?>
    </p>
    <p>
        <?php 
            echo "Estamos no ano de ". date('Y')
        ?>
    </p>
</body>
</html>