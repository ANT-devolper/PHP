<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>resultado</title>
</head>
<body>
    <div>
        <h1>Resultado</h1>
        <?php 
            $num = $_GET['num'];
            echo "<p>O antecessor de <strong>$num</strong> é <strong>" . $num-1 . "</strong></p>";
            echo "<p>O sucessor de <strong>$num</strong> é <strong>" . $num+1 . "</strong></p>";
            
        ?>
        <button onclick="voltar()">voltar</button>
    </div>
    <script>
        function voltar(){
            window.history.back();
        }
    </script>
</body>
</html>