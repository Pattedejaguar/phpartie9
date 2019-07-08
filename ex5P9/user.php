<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/angular.js"></script>
        <title>user.phpex4</title>
</head>
    <body>
<!--      le strip tags permet de ne pas afficher les balises, d'empêcher par exemple les <script>-->
        <p> il était une fois <?= $_strip_tags('lastName').' '.$_strip_tags('firstName')?> ou pas</p>
        <p>test qzsertghjiokl</p>
    </body>
</html>
