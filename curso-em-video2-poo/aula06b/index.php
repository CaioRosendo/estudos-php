<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <P>Arma com 12 munições</P>
    <?php
        require_once 'Arma.php';
        $a = new Arma();
        $a -> atirar;
    ?>
</body>
</html>