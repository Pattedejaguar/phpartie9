<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/angular.js"></script>
        <title>ex8P7</title>
    </head>
    <body>
        <!-- container Bootstrap -->
        <div class="container text-center">
            <!-- header -->
            <header>
                <div class="jumbotron">
                    <h1 class="display-3">PHP ex8p7</h1>
                    <p class="lead">Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p>
                    <hr class="my-2">
                </div>
            </header>
            <!-- main -->
            <main class="text-center">
                <?php
            // Variable de la date du jour
            $date = new DateTime();
            // Variable à laquel on ajoute 20 jours. P20D = + 20 jours
            // add = Ajoute une durée à un objet DateTime
            $date->sub(new DateInterval('P22D'));
            ?>
            <p>kikoo il y a 22 jours nous étions le le le le (roulement de tambourg trop fort qui fait un peu mal aux oreilles parce qu'il a des baguettes en métal qui font des trous dans la peau du dit tambourin) <?= $date->format('d/m/y') ?></p>
            </main>
            <!-- footer -->
            <footer>

            </footer>
        </div>
        <!-- scripts JQuery Popper et Bootstrap-->
        <script src="assets/js/jquery-3.4.0.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- mon script principal -->
        <script src="assets/js/main.js"></script>
    </body>
</html>
