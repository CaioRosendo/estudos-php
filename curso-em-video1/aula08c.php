<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $txt = isset($_GET["txt"])?$_GET["txt"]:"Texto genérico";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <div>
        <?php
            echo "<span class='texto'>$txt</span>";
        ?>
        <br>
        <a href="aula08c.html">voltar</a>
    </div>
</body>
</html>