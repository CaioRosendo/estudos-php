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
            $c=1;   
            do {
                $resp = $val*$c;
                echo "$val x $c = $resp <br>";
                $c++;
            } while ($c<=10);    
        ?>
        <br>
        <a href="aula12c.html">voltar</a>
    </div>
</body>
</html>