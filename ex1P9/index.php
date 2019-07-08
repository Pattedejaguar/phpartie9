<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <title>ex1p9</title>
</head>
  <div class="container text-center">
    <!-- header -->
       <div class="container text-center">
        <div class="jumbotron bg-dark text-white rounded">
          <hr class="border-info">
          <h1 class="display-3">PHP ex1p9</h1>
          <p class="lead">Afficher la date courante en respectant la forme jj/mm/aaaa.</p>
            <hr class="border-info">
            <hr class="border-info">
          </div>
        </header>
        <!-- main -->
        <body class="text-center bg-dark text-white">
        <?php
            // Y = 4 chiffres - y = 2 chiffres
            $today = date("d/m/Y");
            echo $today
            ?>
       </div>
        </body>
      </div>
      <!-- scripts JQuery Popper et Bootstrap-->
     </body>
    </html>
