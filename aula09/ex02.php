<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP função If aninhada</title>
</head>
<body>
    <?php
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tem $i anos. <br/>";
        if ($i < 16) {
            $tipoVoto = "não vota";
        }
        elseif (($i >= 16 && $i < 18) || ($i > 65)) {
            $tipoVoto = "voto opcional";
        }
        else {
            $tipoVoto = "voto obrigatório";
        }

        echo "Para essa idade, $tipoVoto";

    ?>
    <br>
    <a href="ex02.html">Voltar</a>
</body>
</html>