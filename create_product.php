<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Ajouter un produit</title>
</head>
<body>
    <?php include 'config.php'; ?>

    <div class="navbar">
        <a href="list_products.php">Liste des produits</a>
        <a href="list_languages_view.php">Afficher les Langues</a>
        <a href="jointure.php">Afficher tout les ID</a>
    </div>

    <section class="GlobalBody">
        <h2>Ajouter un nouveau produit :</h2>
        <form method="POST" action="insert_product.php">
            <!-- Champ pour crée un produit -->
            Référence: <input type="text" name="reference"><br>

            Description: <textarea name="description" id="" cols="30" rows="2"></textarea><br>

            Prix TTC: <input type="number" name="price_tax_incl"><br>

            Prix HT: <input type="number" name="price_tax_excl"><br>

            Quantité: <input type="number" name="quantity"><br>
            
            <input class="btnAction" type="submit" value="Ajouter le nouveau produit">
        </form>
    </section>
</body>
</html>
