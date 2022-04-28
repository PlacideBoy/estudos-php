<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - Tabuada</title>
</head>
<body>
    <?php
        $n = isset($_GET["num"])?$_GET["num"]:1;
        $mult = 1;
        $res = 0;
        echo "<h1>Mostrando a tabuada de $n</h1> <br/>";

        while ($mult <= 10) {
            $res = $n*$mult;
            echo "$n X $mult = $res <br/>";
            $mult++;
        }

    ?>

    <br>
    <a href="ex03.html"><button>Voltar</button></a>
</body>
</html>