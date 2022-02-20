<?php
session_start();
include ("../database/connection.php");
include ("../database/funcitons.php");

$sort = filter_input(INPUT_GET, 'sort');
$filter = filter_input(INPUT_GET, 'filter');
include("product-List-Form.php");
?>


