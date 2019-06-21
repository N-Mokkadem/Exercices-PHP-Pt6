<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 6</title>
</head>

<body>
    <a href="index.php?building=12&amp;room=101">Vérifier batiment et chambre</a>
    <?php if (isset($_GET['building']) && isset($_GET['room'])) { ?>
    <p>Batiment : <?= $_GET['building'] ?></p>
    <p>Chambre : <?= $_GET['room'] ?></p>
    <?php }
    else { ?>
    <p>Il n'y a pas de paramètres</p>
    <?php  } ?>
</body>

</html>