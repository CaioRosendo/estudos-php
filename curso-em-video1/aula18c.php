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
        <pre>
            <?php
                $m = array( array (3,4),
                            array (4,5),
                            array (5,8) );
                $m[0] [1] = $m[2] [1] ;     
                print_r($m)
                
            ?>
        </pre>
    </div>
</body>
</html>