<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
       <title>ex6p7</title>
    </head>
    <body>
        <!-- container Bootstrap -->
        <!-- header -->
        <header>
            <div class="container text-center">
                <div class="jumbotron">
                    <h1 class="display-3">PHP ex6p7</h1>
                    <p class="lead">AAfficher le nombre de jour dans le mois de février de l'année 2016.
                    </p>
                    <hr class="my-2">
                </div>
            </div>
        </header>
        <!-- main -->
        <main class="text-center">
            <?php
           // cal_days_in_month : Retourne le nombre de jours dans un mois, pour une année et un calendrier donné
            $day = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
            echo "il y a $day jour dans le mois de février 201837391°"
            ?>
        </main>
      </body>
</html>
