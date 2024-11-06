<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Générateur de tableau HTML avec fusion de cellules</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    // Initialisation de la variable pour le code HTML du tableau
    $tableHtml = "";

    // Vérification de la soumission du formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération du nombre de lignes, de colonnes, et des options de fusion
        $rows = intval($_POST["rows"]);
        $cols = intval($_POST["cols"]);
        $mergeHorizontal = intval($_POST["merge_horizontal"]);
        $mergeVertical = intval($_POST["merge_vertical"]);

        // Génération du tableau HTML
        $tableHtml = "<table>\n";
        for ($i = 0; $i < $rows; $i++) {
            $tableHtml .= "    <tr>\n";
            for ($j = 0; $j < $cols; $j++) {
                // Gestion de la fusion horizontale et verticale
                if ($mergeHorizontal > 1 && $j % $mergeHorizontal == 0) {
                    // Fusion horizontale des cellules
                    $tableHtml .= "        <td colspan='$mergeHorizontal'>Fusion horizontale</td>\n";
                    $j += $mergeHorizontal - 1; // Sauter les cellules fusionnées
                } elseif ($mergeVertical > 1 && $i % $mergeVertical == 0 && $j == 0) {
                    // Fusion verticale des cellules
                    $tableHtml .= "        <td rowspan='$mergeVertical'>Fusion verticale</td>\n";
                } else {
                    // Cellule normale
                    $tableHtml .= "        <td>Cellule ($i, $j)</td>\n";
                }
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

        <label for="merge_horizontal">Fusion horizontale (nombre de cellules) :</label><br>
        <input type="number" id="merge_horizontal" name="merge_horizontal" min="1" value="1"><br><br>

        <label for="merge_vertical">Fusion verticale (nombre de lignes) :</label><br>
        <input type="number" id="merge_vertical" name="merge_vertical" min="1" value="1"><br><br>

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
