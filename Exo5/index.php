<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 5</title>
</head>

<body>
    <a href="index.php?week=12">Vérifier paramètre "week"</a>
    <?php if (isset($_GET['week'])) { ?>
      <p>Semaine : <?= $_GET['week'] ?></p>
    <?php } else { ?>
      <p>La semaine n'est pas renseignée</p>
    <?php } ?>
</body>

</html>