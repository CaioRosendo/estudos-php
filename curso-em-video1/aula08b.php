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
            $nome = isset($_GET["nome"])? $_GET["nome"]:"[Não informado]";
            $nasc = isset($_GET["nasc"])? $_GET["nasc"]:0;
            $sexo = isset($_GET["sexo"])? $_GET["sexo"]:"[sem sexo]";
            $idade = date("Y") - $nasc;
            echo "$nome é $sexo e tem $idade anos.";
        ?>
        <br>
        <a href="aula08b.html">Voltar</a>
    </div>
</body>
</html>