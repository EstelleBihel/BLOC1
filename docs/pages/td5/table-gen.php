<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Générateur de tableau HTML</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
    <?php
    // Initialisation de la variable pour le code HTML du tableau
    $tableHtml = "";

    // Vérification de la soumission du formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération du nombre de lignes et de colonnes
        $rows = intval($_POST["rows"]);
        $cols = intval($_POST["cols"]);

        // Génération du tableau HTML
        $tableHtml = "<table>\n";
        for ($i = 0; $i < $rows; $i++) {
            $tableHtml .= "    <tr>\n";
            for ($j = 0; $j < $cols; $j++) {
                $tableHtml .= "        <td>Cellule ($i, $j)</td>\n"; // Contenu par défaut pour chaque cellule
            }
            $tableHtml .= "    </tr>\n";
        }
        $tableHtml .= "</table>";
    }
    ?>

    <!-- Formulaire HTML -->
    <form method="POST" action="">
        <label for="rows">Nombre de lignes :</label><br>
        <input type="number" id="rows" name="rows" min="1" required><br><br>

        <label for="cols">Nombre de colonnes :</label><br>
        <input type="number" id="cols" name="cols" min="1" required><br><br>

        <input type="submit" value="Générer le tableau">
    </form>

    <!-- Affichage du tableau généré -->
    <?php if (!empty($tableHtml)): ?>
        <h3>Tableau généré :</h3>
        <?php echo $tableHtml; ?>

        <h3>Code HTML du tableau :</h3>
        <textarea rows="10" cols="70" readonly><?php echo htmlspecialchars($tableHtml); ?></textarea>
    <?php endif; ?>
</body>
</html>
