<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>ex5p9</title>
</head>
<body>
  <!-- container Bootstrap -->
    <!-- header -->
    <header>
      <div class="container text-center">
        <div class="jumbotron">
          <h1 class="display-3">PHP ex5p9</h1>
          <p class="lead">Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.
        </p>
            <hr class="my-2">
          </div>
      </div>
        </header>
        <!-- main -->
        <main class="text-center">
             <?php
            // DateTime : Représentation d'une date
            // Variable de la date du jour au jour le jour, bonjour jourdin journalier joute verbable
            $dateNow = new DateTime();
            // Variable de la date à comparer
            $date = new DateTime('16-05-2016');
            // diff(): méthode de la classe DateTime(), retourne la différence entre deux objets DateTime
            // On fait la différence entre la date du jour ($dateNow) et la date demandé ($date)
            // On l'affiche au format demandé : %a = nombre de jours
            echo $dateNow->diff($date)->format('Il y a %a jours entre les deux dates données');
            ?>
       </main>
      </body>
    </html>
