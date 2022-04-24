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
        $n1 = isset($_GET["n1"])?number_format($_GET["n1"],1):0;
        $n2 = isset($_GET["n2"])?number_format($_GET["n2"],1):0;
        $m = number_format(($n1 + $n2) / 2,1);


        echo "A média entre $n1 e $n2 é igual a $m <br/>";

        if($m < 5) {
            $sit = "Reprovado";
        }
        elseif ($m >= 5 && $m < 7) {
            $sit = "Em recuperação";
        }
        else {
            $sit = "Aprovado";
        }

        echo "Situação do aluno: $sit"
    ?>
</body>
</html>