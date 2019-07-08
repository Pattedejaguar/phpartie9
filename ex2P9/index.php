<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
  <title>ex2p9</title>
</head>
<body>
  <!-- container Bootstrap -->
  <div class="container text-center">
    <!-- header -->
    <header>
      <div class="container text-center">
        <div class="jumbotron rounded-circle bg-success">
          <h1 class="display-3">PHP ex2p9</h1>
          <p class="lead">Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)</p>
            <hr class="my-5 bg-white">
          </div>
        </header>
        <!-- main -->
        <main class="text-center">
           <?php
            // Y = 4 chiffres - y = 2 chiffres
            $today = date("d-m-Y");
            echo $today
            ?>
</div>
        </main>
      </div>
      <!-- scripts JQuery Popper et Bootstrap-->
      </body>
    </html>
