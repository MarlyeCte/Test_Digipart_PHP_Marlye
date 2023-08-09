<?php include 'config.php'; ?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_product = $_POST["id_product"];
    $new_reference = $_POST["new_reference"];
    $new_description = $_POST["new_description"];
    $new_price_tax_incl = $_POST["new_price_tax_incl"];
    $new_price_tax_excl = $_POST["new_price_tax_excl"];
    $new_quantity = $_POST["new_quantity"];

    $sql = "UPDATE product SET reference='$new_reference', description='$new_description', price_tax_incl='$new_price_tax_incl', price_tax_excl='$new_price_tax_excl', quantity='$new_quantity' WHERE id_product=$id_product";

    if ($dbconn->query($sql) === TRUE) {
        // Redirigez automatiquement vers la page de liste après mise à jour
        echo '<script>
                alert("Le produit a été mis à jour avec succès.");
                window.location.href = "list_products.php";
            </script>';
        exit();
    } else {
        echo "Erreur lors de la mise à jour du produit : " . $dbconn->error;
    }
}
?>
