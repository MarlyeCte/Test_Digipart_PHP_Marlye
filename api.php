<?php
include 'config.php';

$sqlProduct = "SELECT * FROM product";
$resultProduct = $dbconn->query($sqlProduct);

$sqlLanguages = "SELECT * FROM languages";
$resultLanguages = $dbconn->query($sqlLanguages);

$products = [];
$languages = [];

if ($resultProduct->num_rows > 0) {
    while ($row = $resultProduct->fetch_assoc()) {
        $products[] = $row;
    }
}

if ($resultLanguages->num_rows > 0) {
    while ($row = $resultLanguages->fetch_assoc()) {
        $languages[] = $row;
    }
}

$data = [
    'products' => $products,
    'languages' => $languages
];

header('Content-Type: application/json');
echo json_encode($data);
?>
