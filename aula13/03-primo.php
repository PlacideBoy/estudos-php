<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - Teste Númer Primo</title>
</head>
<body>
    <?php
        $n = isset($_GET["num"])?$_GET["num"]:1;
        echo "<h1>Analisando o Número $n... <br></h1>";
        $mult = 0;

        echo "<h2>Valores Múltiplos:</h2> ";
        for ($i=$n; $i >= 1 ; $i--) { 
            if ($n % $i == 0) {
                $mult += 1;
                echo "$i ";
            }
        }

        echo "<h2>Total de Múltiplos: $mult</h2>";

        if ($mult == 2) {
            echo "<h2>Resultado: $n (É UM NÚMERO PRIMO!)</h2>";
        } else {
            echo "<h2>Resultado: $n ( NÃO É UM NÚMERO PRIMO!)</h2>";
        }
    ?>

    <br><a href="03-primo.html"><button>Voltar</button></a>
</body>
</html>