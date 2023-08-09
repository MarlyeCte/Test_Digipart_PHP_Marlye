<?php include 'config.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reference = $_POST["reference"];
    $description = $_POST["description"];
    $price_tax_incl = $_POST["price_tax_incl"];
    $price_tax_excl = $_POST["price_tax_excl"];
    $quantity = $_POST["quantity"];

    $sql = "INSERT INTO product (reference, description, price_tax_incl, price_tax_excl, quantity) VALUES ('$reference', '$description', '$price_tax_incl', '$price_tax_excl', '$quantity')";

    if ($dbconn->query($sql) === TRUE) {
        echo "Nouveau produit ajouté avec succès";
        header("Location: list_products.php");
        exit();
    } else {
        echo "Erreur : " . $sql . "<br>" . $dbconn->error;
    }
}
?>
