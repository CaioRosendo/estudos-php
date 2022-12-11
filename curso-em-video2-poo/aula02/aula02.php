<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>
<body>
    <?php
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1 -> cor = "azul";
        $c1 -> ponta = 0.5;
        $c1 -> tampada = false;
        $c1 -> tampar();
        print_r($c1);

       $c2 = new Caneta;
       $c2 -> cor = "Vermelha";
       $c2 -> carga = 50;
       $c2 -> tampar();
       echo "<br>";
       print_r($c2);
    ?>
</body>
</html>