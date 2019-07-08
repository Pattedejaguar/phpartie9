<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>ex4p9</title>
</head>
<body>
  <!-- container Bootstrap -->
    <!-- header -->
    <header>
      <div class="container text-center">
        <div class="jumbotron">
          <h1 class="display-3">PHP ex4p9</h1>
          <p class="lead">Afficher le timestamp du jour.
Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>
            <hr class="my-2">
          </div>
      </div>
        </header>
        <!-- main -->
        <main class="text-center">
          <p>Timestamp du jour : <?= time() ?></p>
            <!--mktime — Retourne le timestamp UNIX d'une date-->
            <!--mktime($hour, $minute, $second, $month, $day, $year)-->
           <p>Timestamp du mardi 2 août 2016 à 15h00 : <?= mktime(15, 00, 00, 8, 2, 2016) ?></p>
         </main>
      <!-- scripts JQuery Popper et Bootstrap-->
      </body>
    </html>
