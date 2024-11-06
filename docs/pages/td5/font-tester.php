<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage de Message Personnalisé</title>
</head>
<body>
    <?php
        // Récupère les paramètres de l'URL
        $message = isset($_GET['message']) ? $_GET['message'] : null;
        $color = isset($_GET['color']) ? $_GET['color'] : 'black';
        $size = isset($_GET['size']) ? (int)$_GET['size'] : 12;

        // Si aucun message n'est passé, affiche un message d'erreur
        if ($message === null) {
            echo "<p style='color: red;'>Erreur : Aucun message spécifié.</p>";
        } else {
            // Affiche le message dans une div avec le style approprié
            echo "<div style='color: $color; font-size: {$size}px;'>$message</div>";
        }
    ?>

    <h3>Choisissez un message à afficher :</h3>
    <ul>
        <li><a href="?message=Bonjour&color=red&size=15">Message 1 : Bonjour en rouge (taille 15)</a></li>
        <li><a href="?message=Bienvenue&color=green&size=30">Message 2 : Bienvenue en vert (taille 30)</a></li>
        <li><a href="?message=Merci&color=blue&size=50">Message 3 : Merci en bleu (taille 50)</a></li>
    </ul>

    <h3>Personnalisez votre message :</h3>
    <form method="GET">
        <label for="message">Message :</label>
        <input type="text" name="message" id="message" required><br><br>
        
        <label for="color">Couleur :</label>
        <input type="text" name="color" id="color" placeholder="e.g., red"><br><br>
        
        <label for="size">Taille :</label>
        <input type="number" name="size" id="size" min="1" value="12"><br><br>
        
        <button type="submit">Afficher le message</button>
    </form>

    <?php
        // Liens pour augmenter et diminuer la taille du texte
        if ($message !== null) {
            echo "<h3>Modifier la taille du message :</h3>";
            echo "<a href='?message=" . urlencode($message) . "&color=$color&size=" . ($size + 1) . "'>+</a> ";
            echo "<a href='?message=" . urlencode($message) . "&color=$color&size=" . ($size - 1) . "'>-</a>";
        }
    ?>
</body>
</html>
