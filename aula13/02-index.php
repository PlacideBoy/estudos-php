<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - Estrutura For</title>
</head>
<body>
    <form action="02-tabuada.php" method="get">
        <select name="num">
            <?php
                for ($i=1; $i <= 10 ; $i++) { 
                    echo "<option>$i</option>";
                }
            ?>
        </select>
        <input type="submit" value="Tabuada">
    </form>
</body>
</html>