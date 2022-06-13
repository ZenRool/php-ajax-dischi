<?php
require "./props/database.php";
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titolo -->
    <title>Dischi php</title>
    <!-- Foglio di stile  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include "./props/header.php"; ?>
    <main>
        <div class="container d-flex wrap space-around pt-2">
            <?php
                foreach($database as $disc) {
                    echo "
                        <div class='card'>
                            <div class='image'>
                                <img src=". $disc['poster'] . " alt=" . $disc['title'] . "/>
                            </div>
                            <h2 class='mt-1'>". $disc['title'] ."</h2>
                            <p>Nome Artista grande</p>
                            <p>1994</p>
                            </div>

                        ";
                }
            ?>
        </div>
    </main>
</body>
</html>