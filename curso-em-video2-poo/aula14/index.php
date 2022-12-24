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
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once 'Visualizacao.php';
            $v[0] = new Video("Aula 1");
            $v[1] = new Video("Aula 2");
            $v[2] = new Video("Aula 3");

            $g[0] = new Gafanhoto("Caio",28, "M", 1111);
            $g[1] = new Gafanhoto("Bruno",29,"M",2222);
           // print_r($g);
           // print_r($v)

           $vis[0] = new Visualizacao($g[0], $v[2]); 
           //$vis[1] = new Visualizacao($g[0], $v[1]); 
           $vis[0]->avaliarPorc(68);
           print_r($vis)
        ?>
    </pre>
</body>
</html>