<?php

    $dbconn = mysqli_connect("localhost", "root", "", "db_digipart")
        or die('Impossible de ce connecter à la base de donné');

    // $result = mysqli_query($dbconn, "select * from product");
    // // Affiche sous forme de numero le nombre de champ dans la table "article" ci dessous : 
    // echo mysqli_num_rows($result) . " Enregistrement(s) dans la table";
    // echo "<hr />";

    // Inserer des valeurs a la table "languages" ci dessous :
    // mysqli_query($dbconn, "INSERT INTO `languages`(`language`) values('Français')");
    // mysqli_query($dbconn, "INSERT INTO `languages`(`language`) values('Anglais')");
    // $optionOne = mysqli_query($dbconn, "select language from languages where id_lang=1");
    // echo $optionOne;
    // Affiche sous forme de numero le nombre de champ dans la table "languages" ci dessous : 
    // echo mysqli_num_rows($optionOne) . " Enregistrement(s) dans la table";
    // echo "<hr />";

    // $optionOne = mysqli_query($dbconn, "SELECT language FROM languages WHERE id_lang = 1");
    // $optionTwo = mysqli_query($dbconn, "SELECT language FROM languages WHERE id_lang = 2");

    // if ($optionOne && $optionTwo) {
    //     $rowOne = mysqli_fetch_assoc($optionOne);
    //     $rowTwo = mysqli_fetch_assoc($optionTwo);

    //     if ($rowOne) {
    //         echo $rowOne['language'];
    //     } else {
    //         echo "Pas de données trouvées pour la langue 1.<br>";
    //     }

    //     if ($rowTwo) {
    //         echo $rowTwo['language'];
    //     } else {
    //         echo "Pas de données trouvées pour la langue 2.<br>";
    //     }
    // } else {
    //     // Gérer l'erreur de requête
    //     echo "Erreur d'exécution de la requête : " . mysqli_error($dbconn);
    // }



?>

<!-- id_product, reference, description, price_tax_incl, price_tax_excl, quantity -->