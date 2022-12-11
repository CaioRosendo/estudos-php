<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "Garrafa.php";
        $g1 = new Garrafa;
        $g1 -> cor = "azul";
        $g1 -> material = "plástico";
        $g1 -> totl = 20;
        $g1 -> fechada = false;
        $g1 -> beber();
    ?>
</body>
</html>