<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Numeros aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
            echo "O valor gerado foi " . rand(0,100);
        ?>
        <button onclick="refresh()">🔄 Gerar outro</button>
    </main>
    <script>
        function refresh(){
            location.reload()
        }
    </script>
</body>
</html>