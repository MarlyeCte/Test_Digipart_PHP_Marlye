<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Liste des produits</title>
</head>
<body>
    <?php include 'config.php'; ?>

    <div class="navbar">
        <a href="create_product.php">Ajouter un produit</a>
        <a href="list_languages_view.php">Afficher les Langues</a>
        <a href="jointure.php">Afficher tout les ID</a>
    </div>

    <section class="GlobalBody">
        <h2>Liste des produits :</h2>
        <?php
        $sql = "SELECT * FROM product";
        $result = $dbconn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table>';
            echo '<tr>
                    <th>Id_Product</th>
                    <th>Référence</th>
                    <th>Description</th>
                    <th>Prix TTC</th>
                    <th>Prix HT</th>
                    <th>Quantité</th>
                    <th>Actions</th>
                </tr>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["id_product"] . '</td>';
                echo '<td>' . $row["reference"] . '</td>';
                echo '<td>' . $row["description"] . '</td>';
                echo '<td>' . $row["price_tax_incl"] . '</td>';
                echo '<td>' . $row["price_tax_excl"] . '</td>';
                echo '<td>' . $row["quantity"] . '</td>';

                // Commande pour effectuer un pop up de confirmation de la suppresion via un script
                echo '<td><a href="update_product.php?id_product=' . $row["id_product"] . '">Modifier</a> | <a href="javascript:void(0);" onclick="confirmDelete(' . $row["id_product"] . ');">Supprimer</a></td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo "Aucun produit trouvé";
        }
        ?>
    </section>
</body>
</html>


<!-- Script d'un pop up pour confirmée la suppresion d'un produit -->
<script>
    function confirmDelete(id) {
        var result = confirm("Êtes-vous sûr de vouloir supprimer ce produit ?");
        if (result) {
            window.location.href = "delete_product.php?id_product=" + id;
        }
    }
</script>
