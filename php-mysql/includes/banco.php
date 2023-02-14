
    <?php
        $banco = new mysqli("localhost", "root", "", "bd_games");
    
        $busca = $banco->query("select * from generos");
       /* if (!$busca) {
            echo "<p>Falha na busca!</p>";
        } else {
            while ($reg = $busca->fetch_object()) {
                print_r($reg);
            }
        } */
    ?>
