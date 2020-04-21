<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="dist/css/app.css">
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
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
                </div>
            </div>
        </main>
        <footer>
            <div class="container">

            </div>
        </footer>

        <script src="dist/js/app.js" charset="utf-8"></script>
    </body>
</html>
