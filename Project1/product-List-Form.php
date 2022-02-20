<?php
include("../database/connection.php");
include("../database/functions.php");

$productList = get_All_Products();
$display_string = "<main class='cards'></br>";
echo $display_string;
foreach ($productList as $product) {

    echo "<div class='card'>";
    echo "<img src='../CandyPictures/KitKat-King.webp'>";
    echo "<div class='text'>";
    echo "<h4>" . $product['name'] . "</h4>";
    echo "<h4>" . $product['price'] . "</h4>";
    echo "<button style='background-color: deepskyblue; border: black 2px solid; border-radius: 5px; padding: 2px; test'> ADD TO CART</button>";
    echo "</div>";
    echo "</div>";
}
$display_string = "</main>";
echo $display_string;
?>

