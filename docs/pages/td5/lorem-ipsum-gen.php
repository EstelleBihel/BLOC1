<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Générateur de Lorem Ipsum</title>
</head>
<body>
    <?php
    // Tableau PHP contenant 30 paragraphes de Lorem Ipsum
    $paragraphes = [
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.",
        "Cras venenatis euismod malesuada. Nullam sed varius lorem. In eget quam sit amet eros interdum posuere.",
        "Aenean facilisis libero at dolor fermentum, nec consectetur magna ultrices.",
        "Praesent ut ligula non mi varius sagittis. Fusce varius, massa eget vestibulum feugiat, sapien risus mollis urna.",
        "Duis nec neque at sapien bibendum tristique. Vivamus ac nulla eget arcu fermentum bibendum.",
        "Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.",
        "Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada feugiat.",
        "Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.",
        "Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.",
        "Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt.",
        "Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.",
        "Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.",
        "Quisque velit nisi, pretium ut lacinia in, elementum id enim.",
        "Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.",
        "Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.",
        "Curabitur aliquet quam id dui posuere blandit.",
        "Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.",
        "Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.",
        "Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.",
        "Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.",
        "Nulla quis lorem ut libero malesuada feugiat.",
        "Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.",
        "Proin eget tortor risus. Nulla porttitor accumsan tincidunt.",
        "Curabitur aliquet quam id dui posuere blandit.",
        "Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.",
        "Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus.",
        "Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.",
        "Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.",
        "Curabitur aliquet quam id dui posuere blandit.",
        "Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui."
    ];

    // Vérification de la soumission du formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = intval($_POST["nombre"]); // Récupération du nombre de paragraphes souhaités
        $texte = "";

        // Génération du texte selon le nombre de paragraphes demandé
        for ($i = 0; $i < $nombre; $i++) {
            $texte .= $paragraphes[$i] . "\n\n"; // Ajout de chaque paragraphe avec un saut de ligne
        }
    }
    ?>

    <!-- Formulaire HTML -->
    <form method="POST" action="">
        <label for="nombre">Nombre de paragraphes à générer :</label><br>
        <input type="number" id="nombre" name="nombre" min="1" max="30" required><br><br>
        <input type="submit" value="Générer">
    </form>

    <!-- Zone d'affichage du résultat -->
    <?php if (isset($texte)): ?>
        <label for="resultat">Lorem Ipsum généré :</label><br>
        <textarea id="resultat" rows="10" cols="70" readonly><?php echo htmlspecialchars($texte); ?></textarea>
    <?php endif; ?>
</body>
</html>
