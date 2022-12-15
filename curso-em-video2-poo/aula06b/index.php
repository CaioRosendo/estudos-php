<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <P>Arma com 10 munições</P>
    <pre>
        <?php
            require_once 'Arma.php';
            $a = new Arma();
            $a -> desmuniciar();
            $a -> desmontar();
            echo "<br> ......";
            $a -> carregar();
            $a-> montar();
            echo "<br> ......";
            $a -> atirar();
            $a -> carregar();
            $a -> desmontar();
            echo "<br> ......";
            $a -> atirar();
            echo "<br> ......";
            $a -> atirar();
            echo "<p>";
        ?>
    </pre>
</body>
</html>