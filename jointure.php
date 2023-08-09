<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Jointure des tables Product et Languages</title>
</head>
<body>
    <?php include 'config.php'; ?>

    <div class="navbar">
        <a href="create_product.php">Ajouter un produit</a>
        <a href="list_products.php">Liste des produits</a>
        <a href="list_languages_view.php">Afficher les Langues</a>
        <a href="api.php">API REST</a>
    </div>

    <section class="GlobalBody">
        <h2>Jointure des tables Product et Languages :</h2>
        
        <?php
        $sqlProduct = "SELECT id_product FROM product";
        $resultProduct = $dbconn->query($sqlProduct);

        $sqlLanguages = "SELECT id_lang FROM languages";
        $resultLanguages = $dbconn->query($sqlLanguages);

        echo '<table>';
        echo '<tr>
                <th>ID Product</th>
                <th>ID Lang</th>
            </tr>';
        
        while (true) {
            $rowProduct = $resultProduct->fetch_assoc();
            $rowLanguages = $resultLanguages->fetch_assoc();
            
            if (!$rowProduct && !$rowLanguages) {
                break;
            }
            
            echo '<tr>';
            
            if ($rowProduct) {
                echo '<td>' . $rowProduct["id_product"] . '</td>';
            } else {
                echo '<td></td>';
            }

            if ($rowLanguages) {
                echo '<td>' . $rowLanguages["id_lang"] . '</td>';
            } else {
                echo '<td></td>';
            }
            
            echo '</tr>';
        }
        
        echo '</table>';
        ?>
    </section>
</body>
</html>
