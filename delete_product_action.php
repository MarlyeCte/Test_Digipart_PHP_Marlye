<?php include 'config.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_product = $_POST["id_product"];

    $sql = "DELETE FROM product WHERE id_product=$id_product";

    if ($dbconn->query($sql) === TRUE) {
        echo "Produit supprimé avec succès";
    } else {
        echo "Erreur lors de la suppression : " . $dbconn->error;
    }
}
?>
