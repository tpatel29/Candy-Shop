<?php
include("../database/functions.php");
include("../views/header.php");
$productID = filter_input(INPUT_POST, 'id');
$productList = getProductByID($productID);
?>
<div>
    <br>
    <div style="margin: auto; width: 90%; border: 3px solid green; padding: 10px; background-color: lightblue">
        <div style="display: table; clear: both;">
            <div style="float: left; width: 60%; padding: 10px; height: 300px;">
                <img src="../CandyPictures/<?php echo $productList['name']?>.jpeg" width="45%">
            </div>
            <div style="float: left; width: 40%; padding: 10px; height: 300px;">
                <h1> <?php echo $productList['name']?></h1>
                <h3> Price: <?php echo '$'.strval($productList['price']);?></h3>
                <p> Size: <?php echo $productList['size']?> </p>
                <p> Flavor: <?php echo $productList['flavor']?> </p>
                <button style="background-color: deepskyblue; border: black 2px solid; border-radius: 5px; padding: 10px; test"> ADD TO CART</button>
            </div>
        </div>
        <p> <h5>Description:</h5> <?php include("../blackwriting.html") ?></p>
    </div>
</div>
<?php
include("../views/footer.php")
?>
