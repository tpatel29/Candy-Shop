<?php
include ("../database/connection.php");

$sort = filter_input(INPUT_GET, 'sort');
$price = filter_input(INPUT_GET, 'price');
$size = filter_input(INPUT_GET, 'size');
$flavor = filter_input(INPUT_GET, 'flavor');
$brand = filter_input(INPUT_GET, 'brand');
include("product-List-Form.php");
?>


