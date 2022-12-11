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
            $c1 = new Caneta;
            $c1 -> modelo = 'Bic cristal';
            $c1 -> cor = 'azul';
            // $c1 -> ponta = 0.5;        
            $c1 -> rabiscar();
            $c1 -> tampar();
            echo"<br>";
            print_r($c1);
        ?>
    </pre>
</body>
</html>