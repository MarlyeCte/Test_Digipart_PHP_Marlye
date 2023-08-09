<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Supprimer un produit</title>
</head>
<body>
    <?php include 'config.php'; ?>

    <div class="navbar">
        <a href="create_product.php">Ajouter un produit</a>
        <a href="list_products.php">Liste des produits</a>
    </div>

    <?php
    if (isset($_GET["id_product"])) {
        $id_product = $_GET["id_product"];

        $check_sql = "SELECT id_product FROM product WHERE id_product=$id_product";
        $check_result = $dbconn->query($check_sql);

        if ($check_result->num_rows > 0) {
            $delete_sql = "DELETE FROM product WHERE id_product=$id_product";

            if ($dbconn->query($delete_sql) === TRUE) {
                echo "Produit supprimé avec succès";
                header("Location: list_products.php");
                exit();
            } else {
                echo "Erreur lors de la suppression : " . $dbconn->error;
            }
        } else {
            echo "Le produit n'existe pas";
        }
    }
    ?>
</body>
</html>
