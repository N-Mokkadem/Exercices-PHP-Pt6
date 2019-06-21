<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Partie 6 - Exercice 1</title>
</head>

<body>
    <a href="index.php?lastname=Nemare&firstname=Jean">Vérifier paramètres URL</a>
    <p>Bonjour <?= $_GET['firstname'] ?> <?= $_GET['lastname'] ?></p>
</body>

</html>