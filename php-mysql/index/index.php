<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilo.css?v=1">
    <title> Listagem de jogos</title>
</head>
<body>
    <?php
        require_once "../includes/banco.php";
        require_once "../includes/funcoes.php";
    ?>
    <div  id="corpo">
        <h1>Escolha seu jogo</h1>
        <table class="listagem">
            <?php 
                $busca = $banco-> query("select * from jogos order by nome");
                if (!$busca) {
                    echo "<tr><td>Infelizmente a busca deu errado";
                } else {
                    if ($busca -> num_rows == 0) {
                        echo "<tr><td> Nenhum registro encotrado";
                    } else {
                        while($reg=$busca->fetch_object()) {
                            $t = thumb($reg->capa);
                            echo "<tr><td> <img src='$t' class='mini' />";
                            echo "<td> <a href='detalhes.php?cod=$reg->cod'> $reg->nome <a/> ";
                            echo "<td> adm ";
                        }
                    }
                }
            ?>
         </table>    
    </div>
    <?php $banco->close();?>
</body>
</html>