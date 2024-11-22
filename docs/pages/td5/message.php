<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Afficher un message</title>
</head>
<body>
    <?php
        // Message passé en paramètre dans l'URL?
        $message = isset($_GET['message']) ? $_GET['message'] : "Message par défaut";

        // Affiche le message
        echo "<p>$message</p>";
    ?>

    <h3>Choisissez un message à afficher :</h3>
    <ul>
        <li><a href="?message=Bonjour">Message 1: Bonjour</a></li>
        <li><a href="?message=Bienvenue">Message 2: Bienvenue</a></li>
        <li><a href="?message=Merci%20de%20votre%20visite">Message 3: Merci de votre visite</a></li>
    </ul>
</body>
</html>
