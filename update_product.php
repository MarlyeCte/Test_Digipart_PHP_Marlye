<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Modifier un produit</title>
</head>
<body>
    <?php include 'config.php'; ?>

    <div class="navbar">
        <a href="create_product.php">Ajouter un produit</a>
        <a href="list_products.php">Liste des produits</a>
        <a href="list_languages_view.php">Afficher les Langues</a>
        <a href="jointure.php">Afficher tout les ID</a>
    </div>

    <section class="GlobalBody">
        <?php
        if (isset($_GET["id_product"])) {
            $id_product = $_GET["id_product"];
            $sql = "SELECT * FROM product WHERE id_product=$id_product";
            $result = $dbconn->query($sql);
            $row = $result->fetch_assoc();
        }
        ?>
        
        <h2>Modifier le produit :</h2>
        <form method="POST" action="update_product_action.php">
            <input type="hidden" name="id_product" value="<?php echo $row['id_product']; ?>">

            Référence: <input type="text" name="new_reference" value="<?php echo $row["reference"]; ?>"><br>

            Description: <textarea name="new_description" id="" cols="30" rows="2"><?php echo $row["description"]; ?></textarea><br>

            Prix TTC: <input type="text" name="new_price_tax_incl" value="<?php echo $row["price_tax_incl"]; ?>"><br>

            Prix HT: <input type="text" name="new_price_tax_excl" value="<?php echo $row["price_tax_excl"]; ?>"><br>

            Quantité: <input type="text" name="new_quantity" value="<?php echo $row["quantity"]; ?>"><br>
            
            <input class="btnAction" type="submit" value="Mettre à jour le produit">
        </form>
    </section>
</body>
</html>
