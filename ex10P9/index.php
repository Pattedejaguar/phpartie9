<?php
// Tableau pour les mois
$months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
// Tableau pour les jours de la semaine
$daysOfWeek = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
// Condition pour les mois et les années
// Si ce n'est pas vide, affiche le mois et l'année demandé
$selectedMonth = (!empty($_GET['month'])) ? $_GET['month'] : date('n');
$selectedYear = (!empty($_GET['year'])) ? $_GET['year'] : date('Y');
// Variable pour le premier jour du mois
$firstDayInMonth = date('N', mktime(0, 0, 0, $selectedMonth, 1, $selectedYear));
// Variable pour le nombre de jours dans le mois
$dayInMonth = cal_days_in_month(CAL_GREGORIAN, $selectedMonth, $selectedYear);
$day = 1;
$start = false;
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Exercice TP</title>
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1>PHP</h1>
                <h2>Partie 9 Exercice TP</h2>
                <p class="txt">Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.</p>
                <p class="txt">En fonction des choix, afficher un calendrier.</p>
            </div>
        </div>
        <div class="php">
            <form action="" method="get">
                <select name="month" id="month">
                    <!-- Boucle pour parcourir les mois -->
                    <?php foreach ($months as $monthNumber => $month) { ?>
                        <option value="<?= $monthNumber + 1 ?>" <?= ($monthNumber + 1 == $selectedMonth) ? 'selected' : '' ?>>
                            <?= $month ?>
                        </option>
                    <?php } ?>
                </select>
                <select name="year" id="year">
                    <!-- Boucle avec incrémentation pour les années -->
                    <?php for ($year = 1901; $year <= 2100; $year++) { ?>
                        <option value="<?= $year ?>" <?= ($year == $selectedYear) ? 'selected' : '' ?>>
                            <?= $year ?>
                        </option>
                    <?php } ?>
                </select>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <!-- Boucle pour les jours de la semaine -->
                        <?php foreach ($daysOfWeek as $nameOfDay) { ?>
                            <td><?= $nameOfDay ?></td>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <!-- Boucle pour créer les 6 lignes du tableau -->
                    <?php while ($day <= $dayInMonth) { ?>
                        <tr>
                            <?php for ($td = 1; $td <= 7; $td++) {
                                if (($start || $firstDayInMonth == $td) && ($day <= $dayInMonth)) { ?>
                                    <td><?= $day ?></td>
                                    <?php
                                   $start = true;
                                    $day++;
                                } else { ?>
                                    <td class="bg-dark"></td>
                                <?php
                                }
                            }
                            ?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>