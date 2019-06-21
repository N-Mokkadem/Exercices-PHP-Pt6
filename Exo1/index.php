<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Partie 6 - Exercice 1</title>
</head>

<body>
    <!-- penser à remplacer le & par &amp; dans le lien -->
    <a href="index.php?lastname=Nemare&amp;firstname=Jean">Vérifier paramètres URL</a>
    <?php if (isset($_GET['lastname']) && isset($_GET['firstname'])) { ?>
        <p>Bonjour <?= $_GET['firstname'] . ' ' . $_GET['lastname'] ?></p>
    <?php }
    else { ?>
        <p>Les valeurs n'existent pas.</p>
    <?php } ?>
</body>

</html>