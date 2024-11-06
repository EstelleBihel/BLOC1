<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage de Message</title>
</head>
<body>
    <?php
        // Vérifie si un message est passé en paramètre dans l'URL
        $message = isset($_GET['message']) ? $_GET['message'] : "Message par défaut";

        // Affiche le message
        echo "<p>$message</p>";
    ?>

    <h3>Choisissez un message à afficher :</h3>
    <ul>
        <li><a href="?message=Bonjour%20tout%20le%20monde">Message 1: Bonjour tout le monde</a></li>
        <li><a href="?message=Bienvenue%20sur%20mon%20site">Message 2: Bienvenue sur mon site</a></li>
        <li><a href="?message=Merci%20de%20votre%20visite">Message 3: Merci de votre visite</a></li>
    </ul>
</body>
</html>
