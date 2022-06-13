<?php
    // require "./props/database.php";
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
    <!-- CDN Axios  -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
        integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>
    <!-- Collegamento Vue 2 -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>
<body>
    <?php include "./props/header.php"; ?>
    <main>
        <!-- <div class="container d-flex wrap space-around pt-2"> -->
            <!-- PHP solution -->
            <?php
                // foreach($database as $disc) {
                //     echo "
                //         <div class='card'>
                //             <div class='image'>
                //                 <img src=". $disc['poster'] . " alt=" . $disc['title'] . "/>
                //             </div>
                //             <h2 class='mt-1'>". $disc['title'] ."</h2>
                //             <p>$disc['author']</p>
                //             <p>$disc['year']</p>
                //             </div>
                //         ";
                // }
            ?>
            <!-- #ROOT VUE -->
        <div id="root">
            <div v-if="loading" class="container d-flex wrap space-around pt-2">
                Loading ...
            </div>
            <div v-else class="container d-flex wrap space-around pt-2">
                <div class="card" v-for="disc in albums">
                    <div class="image">
                        <img :src="disc.poster" alt="disc.title"/>
                    </div>
                    <h2 class="mt-1">{{ disc.title }}</h2>
                    <p class="author">{{ disc.author }}</p>
                    <p>{{ disc.year }}</p>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </main>

    <!-- Script  -->
    <script src="js/script.js"></script>
</body>
</html>