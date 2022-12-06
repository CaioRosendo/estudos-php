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
                $c=range(5,20,2);
                foreach($c as $v) {
                echo "$v  ";
                }

                $vet = array("nome" => "Caio",
                            "idade" => 28,
                            "peso" => 78.4);
                foreach($vet as $k => $c) {
                    echo "<br>O campo $k possui o conteudo $c.";
                }
            ?>
        </pre>
    </div>
</body>
</html>