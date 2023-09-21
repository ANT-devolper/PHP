<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal
        // 0b = binario
        // 0 = Octal
        // $num = 0x1A;
        // echo "O valor da variavel é $num";
        
        // $v = false;
        // var_dump($v);
        
        // $num = (float) "950";
        // var_dump($num);

        // $casado = false;
        // echo "O valor para casado é $casado";

        // $vetor = [6, 2, "ANT", 3, "gustavo"];
        // var_dump($vetor);

        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>