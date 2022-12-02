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
            $val= $_GET["val"];
            $c = $val;
            $f = 1;
            do {
                $f = $f*$c;
                $c--; 
            } while ($c>=1);
            echo "$val ! = $f";
        ?>
        <br>
        <a href="aula12b.html">voltar</a>
    </div>
</body>
</html>