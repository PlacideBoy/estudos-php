<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - Array</title>
</head>
<body>
    <?php
        $v = array( "nome"=>"Lucas", "idade"=>27, "peso"=>75.8);
        
        foreach ($v as $campo => $valor) {
            echo "O campo $campo possui o conteúdo $valor <br>";
        }
    ?>
</body>
</html>