<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador While</title>
</head>
<body>
    <?php
        $init = isset($_GET["inicio"])?$_GET["inicio"]:0;
        $fim = isset($_GET["final"])?$_GET["final"]:0;
        $passo = isset($_GET["passo"])?$_GET["passo"]:0;

        if ($init < $fim) {
            while ($init <= $fim) {
                echo "$init ";
                $init = $init + $passo;
            }
        }

        elseif ($init > $fim) {
            while ($init >= $fim) {
                echo "$init ";
                $init = $init - $passo;
            }
        }

        else {
            echo "Volte e digite um intervalo válido";
        }

    ?>

    <br>
    <button><a href="javascript:history.go(-1)">Voltar</a></button>
</body>
</html>