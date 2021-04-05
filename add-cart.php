<?php
 
 include("database.php");
 
 $quantity = $_POST["no_of_items"];
 $productCode = $_POST["ID"];
  
 $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
 $cart = json_decode($cart);
  
 $result = mysqli_query($conn, "SELECT cost FROM products WHERE ID = '" . $productCode . "'");
//  $product = mysqli_fetch_object($result);
$product=$result['cost'];
  
 array_push($cart, array(
     "productCode" => $productCode,
     "quantity" => $quantity,
     "cost" => $product
 ));
  
 setcookie("cart", json_encode($cart));
 header("Location: product.php");
  
 ?>