<?php
 
$productCode = $_POST["ID"];
$quantity = $_POST["no_of_items"];
 
$cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
$cart = json_decode($cart);
 
foreach ($cart as $c)
{
    if ($c->productCode == $productCode)
    {
        $c->quantity = $quantity;
    }
}
 
setcookie("cart", json_encode($cart));
header("Location: cart.php");