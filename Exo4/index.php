<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>

<body>
    <a href="index.php?language=PHP&amp;server=LAMP">Vérifier les paramètres de l'URL</a>
    <?php if (isset($_GET['language']) && isset($_GET['server'])) { ?>
      <p>Langage : <?= $_GET['language'] ?></p>
      <p>Serveur : <?= $_GET['server'] ?></p>
    <?php } else { ?>
      <p>Les paramètres n'existent pas.</p>
    <?php } ?>
</body>

</html>