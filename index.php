<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="dist/css/app.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js" integrity="sha256-usTqAE1ywvdMtksWzdeWzD75MsfJN0h0U7y2NtZL3N0=" crossorigin="anonymous"></script>
        <title>SPAJaxfy</title>
    </head>
    <body>
        <header>
            <div class="container">
                <div id="logo">
                    <a href="#">
                        <img src="https://cdn.iconscout.com/icon/free/png-256/spotify-33-675787.png" alt="logo">
                    </a>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="container-inner">
                        <?php
                            // include "data.php";
                        ?>
                        <?php /* foreach ($database as $key => $card) { ?>
                            <!-- <div class="card">
                                <div class="image">
                                    <img id="album" src="<?php echo $card["immagine"] ?>" alt="">
                                </div>
                                <div class="text">
                                    <h4><?php echo $card["titolo"] ?></h4>
                                    <h5><?php echo $card["artista"] ?></h5>
                                    <p><?php echo $card["anno"] ?></p>
                                </div>
                            </div> -->
                        <?php } */ ?>
                    <script id="template" type="text/x-handlebars-template">
                        <div class="card">
                            <div class="image">
                                <img id="album" src={{immagine}} alt="">
                            </div>
                            <div class="text">
                                <h4>{{titolo}}</h4>
                                <h5>{{artista}}</h5>
                                <p>{{anno}}</p>
                            </div>
                        </div>
                    </script>
                </div>
            </div>
        </main>
        <footer>
            <div class="container">

            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="dist/js/app.js" charset="utf-8"></script>
    </body>
</html>
