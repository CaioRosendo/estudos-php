<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta("bic","preta",0.7);
            print_r($c1);

            $c2 = new Caneta("compact","azul",0.5);
            print_r($c2)
        ?>
    </pre>
</body>
</html>