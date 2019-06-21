<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Excercice 3</title>
</head>

<body>
    <a href="index.php?startDate=2/05/2016&endDate=27/11/2016">Vérifier les paramètres d'URL</a>
    <!-- isset va vérifier que les deux variables existent en utilisant l'opérateur "AND"-->
    <?php if (isset($_GET['startDate']) AND isset($_GET['endDate'])) { ?>
    <!-- Si les paramètres existent dans l'URL, alors la page affichera ce message : -->
    <p>Voici les paramètres renseignés : <?= $_GET['startDate'] ?> et <?= $_GET['endDate'] ?></p>
    <?php }
else { ?>
    <!-- Sinon la page affichera ceci : -->
    <p>Les paramètres n'existent pas !</p>
    <?php } ?>
</body>

</html>