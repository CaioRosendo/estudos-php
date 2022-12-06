<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            function soma ($a,$b) {
            $s = $a + $b;
            echo "<br>A soma vale $s";
            }
            soma (3,4);
            soma (8,2)
        ?>
    </div>
</body>
</html>