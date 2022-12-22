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
            require_once 'Mamifer.php';
            require_once 'Lobo.php';
            require_once 'Dog.php';

            $c = new Dog;
            $c -> emitirSom();
            $c -> reagirFrase("Comida");
            $c -> reagirDono(false)
        ?>
    </pre>
</body>
</html>