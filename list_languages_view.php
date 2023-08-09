<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Liste des langues</title>
</head>
<body>
    <?php include 'config.php'; ?>

    <div class="navbar">
        <a href="create_product.php">Ajouter un produit</a>
        <a href="list_products.php">Liste des produits</a>
        <a href="jointure.php">Afficher les ID</a>
    </div>

    <section class="GlobalBody">
        <h2>Liste des langues :</h2>
        <?php
            $sql = "SELECT * FROM languages";
            $result = $dbconn->query($sql);

            if ($result->num_rows > 0) {
                echo '<table>';
                echo '<tr>
                        <th>ID Langue</th>
                        <th>Langue</th>
                    </tr>';
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row["id_lang"] . '</td>';
                    echo '<td>' . $row["language"] . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            } else {
                echo "Aucune langue trouvée";
            }
        ?>
    </section>
</body>
</html>
