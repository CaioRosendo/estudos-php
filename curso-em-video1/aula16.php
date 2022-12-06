<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <div>
        <?php
            //PRINTF
            echo "printf: ";
            $p = "leite";
            $pr = 4.5;
            printf ("O %s custa R$ %.2f.",$p,$pr,); 
            echo "<br> Print_r: ";

            //PRINT_R
            $x[0] = 4;
            $x[1] = 6;
            $x[2] = 8;
            print_r($x);

            //wordwrap
            echo "<p>wordwrap: ";
            $txt = "<br>  Exemplo de string gigante que estou usando apenas como exemplo para a função wordwarp em php, no cursoemvideo do professor Gustavo Guanabara, que foi gravado em 2014(ano que me formei), porem só estou assistindo em 2022.  ";
            $res = wordwrap($txt, 20, "<br>");
            echo ($res);
            //strlen, trim, ltrim, rtrim
            $tamanho = strlen($txt);
            echo "Strlen: $tamanho";
            $novo = trim($txt);
            echo "<br> trim: ", strlen($novo);

            //str_word_count
            $frase="Estou estudando php agora";
            $cont = str_word_count($frase,0);
            echo "<p>ex. de frase: $frase...<br> str_word_count da frase: ";
            print($cont);

            //explode e implode
            $site = "Curso em video";
            $vetor = explode(" ",$site);
            echo"<p> explode: ";
            print_r($vetor);
             
        ?>
    </div>
</body>
</html>