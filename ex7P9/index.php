<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>ex7P7</title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">
    <!-- header -->
    <header>
      <div class="jumbotron">
        <h1 class="display-3">PHP ex7p7</h1>
        <p class="lead">Afficher la date du jour + 20 jours</p>
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
            $date->add(new DateInterval('P20D'));
            ?>
<p>In twenty days we will be the : <?= $date->format('m/d/y') ?></p>
      </main>
    <!-- footer -->
    <footer>

    </footer>
  </div>
  <!-- scripts JQuery Popper et Bootstrap-->
</body>
</html>
