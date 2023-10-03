<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Super Globais</title>
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);
                
                session_start();
                $_SESSION["teste"] = "FUNCIONOU";

                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);

                echo "<h1>Superglobal Post</h1>";
                var_dump($_POST);

                echo "<h1>Superglobal Request</h1>";
                var_dump($_REQUEST);

                echo "<h1>Superglobal Cookie</h1>";
                var_dump($_COOKIE);

                echo "<h1>Superglobal Session</h1>";
                var_dump($_SESSION);

                echo "<h1>Superglobal Env</h1>";
                var_dump($_ENV);
                //foreach(getenv() as $c => $v){
                    //   echo "<br> $c -> $v ";
                //}

                echo "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER);

                echo "<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS)
            ?>
        </pre>
    </main>
</body>
</html>