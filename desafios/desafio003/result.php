<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversão</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $money = $_GET["dinheiro"];
            echo "Seus R$$money equivalem a US$" . $money*4.99;
        ?>
        <p>*<strong>Cotação fixa de 4,99</strong> informada diretamente no codigo</p>
        <button onclick="volta()">Voltar</button>
    </main>
    <script>
        function volta(){
            window.history.back()
        }
    </script>
</body>
</html>