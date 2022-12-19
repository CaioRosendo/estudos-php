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
            require_once 'Pessoa.php';
            require_once 'Livro.php';
            $p[0] = new Pessoa("Caio",28,"M");
            $p[1] = new Pessoa("May",27,"F");
            $l[0] = new Livro("PHP","Guanabara",200,$p[0]);
            $l[1] = new Livro("MODA","gente chata", 300, $p[1]);
            $l[2] = new Livro("JAVA","Cleiton",400,$p[0]);

            $l[0] -> abrir();
            $l[0] -> folhear(50);
            $l[0] -> voltarPag();
            $l[0] -> fechar();
            $l[0] -> detalhes();

            $l[2] -> detalhes();
            $l[2] ->abrir();
            $l[2] -> folhear(20)
        ?>
    </pre>
</body>
</html>