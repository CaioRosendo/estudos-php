<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = "caio henrique";
        echo "strtolower: ".strtolower($nome);
        echo "<br>strtoupper: ".strtoupper($nome);
        echo "<br>ucfirst: ".ucfirst($nome);
        echo "<br>ucwords: ".ucwords($nome);
        echo "<br>strrev: ".strrev($nome);

        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "PHP");
        echo "<p> strpos: $frase <br>";
        echo "A string foi encontrada na posição $pos.";
        $posi = stripos($frase, "php");
        echo "<p> stripos: $frase <br>";
        echo "A string foi encontrada na posição $posi.";

        $f = "Estou aprendendo php, no curso online de php.";
        $cont = substr_count($f,"php");
        echo "<p> substr_count: na frase--> '$f', a palavra 'php' aparece $cont vezes";

        $site = "Curso em vídeo";
        $sub = substr($site,0,5);
        echo "<p> substr de $site, sendo as posições 0 e 5 é $sub";

        $nom ="Caio";
        $novo = str_pad($nom,25,"*",STR_PAD_BOTH);
        print"<p> com STR_PAD_BOTH fica: <br> O aluno $novo é lindo.";

        $texto = str_repeat("lindo ",3);
        print "<p> com str_repeat, o texto gerado foi: Caio é $texto";

        $fras = "Gosto de estudar programação";
        $novafrase = str_replace("programação","php",$fras);
        echo "<p> com str_replace fica: $novafrase";
    ?>
</body>
</html>