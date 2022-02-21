<?php
include("../database/connection.php");
include("../database/functions.php");

$productList = get_All_Products($sort , $price, $size, $flavor, $brand);
$display_string = "<main class='cards'></br>";
echo $display_string;
foreach ($productList as $product) {

    echo "<div class='card'>";
    echo "<img src='../CandyPictures/".$product['pic_name']."'>";
    echo "<div class='text'>";
    echo "<h4>" . $product['name'] . "</h4>";
    echo "<h4>$" . $product['price'] . "</h4>";
    echo "<form method='POST' action='productDetails.php'><input type='hidden' name='idTemp' value='".$product['id']."'/> <input type='submit' value='View Product Details'/> </form>";
    echo "</div>";
    echo "</div>";
}
$display_string = "</main>";
echo $display_string;
?>

