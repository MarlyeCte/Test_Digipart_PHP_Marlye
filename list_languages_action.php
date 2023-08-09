<?php include 'config.php'; ?>

<?php

$sql = "SELECT id_lang, language FROM languages";
$result = $dbconn->query($sql);
$languagesData = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $languagesData[] = $row;
    }
}

include 'list_languages_view.php';
?>
