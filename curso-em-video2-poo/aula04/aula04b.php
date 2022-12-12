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
            require_once 'Tv.php';
            $tv1 = new Tv("Lg",40,"4k",false);
            print_r($tv1);

            $tv2 = new Tv("Samsung",32,"FullHD",true);
            print_r($tv2)
        ?>
    </pre>
</body>
</html>