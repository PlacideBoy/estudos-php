<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <?php
        $preco = $_GET["p"];
        echo "O preço do produto é R$ " . number_format($preco, 2);
        $preco += $preco*10/100;
        echo "<br/>E o novo preço com 10% de aumento será R$ " . number_format($preco,   2);

        //Primeiro tipo de comentário
        #Segundo tipo de comentário
        /* Terceiro tipo de
            Comentário */
    ?>
</body>
</html>