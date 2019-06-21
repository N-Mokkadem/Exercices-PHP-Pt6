<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>

<body>
    <a href="index.php?lastname=Nemare&amp;firstname=Jean">Vérifier paramètres URL</a>
    <!-- isset va vérifier que la variable "âge" existe -->
    <?php if (isset($_GET['age'])) { ?>
    <!-- Si la variable "âge" existe, alors le message suivant sera affiché : -->
        <p>Bonjour <?= $_GET['firstname'] . ' ' . $_GET['lastname'] ?> vous avez <?= $_GET['age'] ?> ans !</p>
    <!-- Si la variable n'existe pas, alors le message suivant sera affiché : -->
    <?php }
    else { ?>
        <p>L'âge n'est pas renseigné.</p>
    <?php } ?>

</body>

</html>