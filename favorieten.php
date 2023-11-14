<?php
include __DIR__ . "/header.php";
include "favorietenfuncties.php";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Favorieten</title>
    <style>
        h1 {
            text-align: center;
            border: 1px solid #FFFFFF;
            padding: 10px;
            width: 100%;
        }


    </style>
</head>
<body>
<h1>Favorieten</h1>

<?php
$favorites = getFavorite();
$connection = connectToDatabase();

foreach ($favorites as $Artikelnummer => $aantal ) {
    print("<div class='favorit-item'>");

    $productDetails = getStockItem($Artikelnummer, $connection);

    if ($productDetails) {
        print("<div class='product'>");
        print("<div class='product-info'>");
        print("<h3>" . $productDetails['StockItemName'] . "</h3>");
        //Rond de prijs op twee decimalen af
        $afgerondePrijs = number_format($productDetails['SellPrice'], 2);
        //Toont de prijs
        print("<p>Prijs: €" . $afgerondePrijs . "</p>");
        //Toont de voorraad
        print("<p>" . $productDetails['QuantityOnHand'] . "</p>");
    }

}
?>
</body>
</html>