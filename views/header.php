<?php include("../database/connection.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Sweet Tooth Co.</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <script src="../Project1/index.js"></script>
    <script src="../Project1/filter.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-expand-md
                            justify-content-start
                            bg-dark navbar-dark
                            col-12">
            <a href="../Project1/index.php">𝕥𝕙𝕖 𝕤𝕨𝕖𝕖𝕥 𝕥𝕠𝕠𝕥𝕙</a>
            <button class="navbar-toggler" type="button"
                    data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggle-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./product-list.php">Product List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./productDetails.php?id=2">Product Detail</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>