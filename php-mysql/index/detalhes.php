<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilo.css??v=2">
    <title>detalhes</title>
</head>
<body>
    <?php
        require_once "../includes/banco.php";
        require_once "../includes/funcoes.php";
    ?>
    <div id="corpo"> 
        <?php
            $c = $cod = $_GET['cod'] ?? 0;
            $busca = $banco->query("select * from jogos where cod='$c'");
        ?>
    <div>
        <h1> Detalhes do jogo</h1>
        <table class='detalhes'>
            <?php
                if (!$busca) {
                    echo "Busca falhou...";
                } else { 
                    if ($busca -> num_rows == 1) {
                        $reg = $busca -> fetch_object();
                        $t = thumb($reg -> capa);
                        echo "<td><h2>$reg->nome</h2>"; 
                        echo "<td>Nota: $reg->nota/10.0"; 
                        echo "<tr><td rowpan='3'> <img src ='$t' class='full' />"; 
                         
                        echo "<td id='desc'>$reg->descricao";
                        echo "<td>Adm ";
                    } else {
                        echo "<tr><td> Nenhum registro encontrado";
                    }
                }
            ?>
        </table>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>