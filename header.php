<!-- de inhoud van dit bestand wordt bovenaan elke pagina geplaatst -->
<?php
session_start();
include "database.php";
$databaseConnection = connectToDatabase();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>NerdyGadgets</title>

    <!-- Javascript -->
    <script src="Public/JS/fontawesome.js"></script>
    <script src="Public/JS/jquery.min.js"></script>
    <script src="Public/JS/bootstrap.min.js"></script>
    <script src="Public/JS/popper.min.js"></script>
    <script src="Public/JS/resizer.js"></script>

    <!-- Style sheets-->
    <link rel="stylesheet" href="Public/CSS/style.css" type="text/css">
    <link rel="stylesheet" href="Public/CSS/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="Public/CSS/typekit.css">


</head>
<body>
<div class="Background">
    <div class="row" id="Header">
        <div class="col-2"><a href="./" id="LogoA">
                <div id="Nerdygadgets Logo">
                <img src="Public/Img/barcode%20logo.png"
                     print'<img src="Public/Img/Nerdygadgets%20Logo.png" width="300" height="199" />
                </div>
            </a></div>
        <div class="col-8" id="CategoriesBar">
            <ul id="ul-class">
                <body>
                <?php
                $HeaderStockGroups = getHeaderStockGroups($databaseConnection);

                foreach ($HeaderStockGroups as $HeaderStockGroup) {
                    ?>
                    <li>
                        <a href="browse.php?category_id=<?php print $HeaderStockGroup['StockGroupID']; ?>"
                           class="HrefDecoration"><?php print $HeaderStockGroup['StockGroupName']; ?></a>
                    </li>
                    <?php
                }
                ?>
                <li>
                    <a href="categories.php" class="HrefDecoration">Alle categorieën</a>
                </li>
            </ul>
        </div>
        
    
        <ul id="ul-class-navigation">
                <a href="favorieten.php" class="HrefDecoration"><i class="fas fa-heart" ></i> | </a>
                <a href="winkelmandje.php" class="HrefDecoration"><i class="fas fa-shopping-cart"></i> | </a>
                <a href="browse.php" class="HrefDecoration"><i class="fas fa-search "></i> | </a>
                <a href="registratie.php" class="HrefDecoration"><i class="fas fa-user"></i>  </a>
        </ul>

    </div>
    <div class="row" id="Content">
        <div class="col-12">
            <div id="SubContent">


</body>