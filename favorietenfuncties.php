<?php
 // altijd hiermee starten als je gebruik wilt maken van sessiegegevens

function getFavorite()
{
    if (isset($_SESSION['cart'])) {               //controleren of winkelmandje (=cart) al bestaat
        $Favorit = $_SESSION['cart'];                  //zo ja:  ophalen
    } else {
        $Favorit = array();                            //zo nee: dan een nieuwe (nog lege) array
    }
    return $Favorit;                               // resulterend winkelmandje terug naar aanroeper functie
}

function saveFavorit($Favorit)
{
    $_SESSION["cart"] = $Favorit;                  // werk de "gedeelde" $_SESSION["cart"] bij met de meegestuurde gegevens
}

function addProductToFavorit($stockItemID)
{
    $Favorit = getCart();                          // eerst de huidige cart ophalen

    if (array_key_exists($stockItemID, $Favorit)) {  //controleren of $stockItemID(=key!) al in array staat
        $Favorit[$stockItemID] += 1;                   //zo ja:  aantal met 1 verhogen
    } else {
        $Favorit[$stockItemID] = 1;                    //zo nee: key toevoegen en aantal op 1 zetten.
    }

    saveCart($Favorit);                            // werk de "gedeelde" $_SESSION["cart"] bij met de bijgewerkte cart
}
function updateFavorit($favorit) {
    $_SESSION['cart'] = $favorit;
}