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
            $ano = isset($_GET["ano"])?$_GET["ano"]:1900;
            $idade = date ("Y") - $ano;
            echo "Você nasceu em $ano";
            if($idade < 16) {
                echo("<br> Você tem $idade anos e não tem idade para votar.");
            } elseif (($idade>=16 && $idade<18) || ($idade>65)) {
                echo("<br> Você tem $idade anos e seu voto é opcional.");
            } else {
                echo ("<br> Você tem $idade anos e seu voto é obrigatório.");
            }
        ?>
        <br>
    <a href="aula09a.html">Voltar</a>
    </div>
</body>
</html>