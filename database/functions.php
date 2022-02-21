<?php
session_start();
include ("connection.php");
function get_product($productID){
    global $conn;
    $query = 'SELECT * FROM Products WHERE id = :id';
    $statement = $conn->prepare($query);
    $statement->bindValue(':id', $productID);
    $statement->execute();
    $results = $statement->fetchAll();
    $statement->closeCursor();
    return $results[0];
}
function get_All_Products($sort , $price, $size, $flavor, $brand){
    global $conn;
    $query = 'SELECT * FROM Products ';
    $setWhere = false;
    $hasSort = false;
    $hasPrice = false;
    $hasSize = false;
    $hasFlavor = false;
    $hasBrand = false;
    if($price != ""){
        if(!$setWhere){
            $query = $query." WHERE price <= :pricee ";
            $setWhere = true;
        }
        else {
            $query = $query . " price <= :pricee ";
        }
        $hasPrice = true;
    }
    if($size != ""){
        if(!$setWhere){
            $query = $query." WHERE size = :sizee ";
            $setWhere = true;
        }
        else {
            $query = $query." size = :sizee ";
        }
        $hasSize = true;
    }
    if($flavor != ""){
        if(!$setWhere){
            $query = $query." WHERE flavor = :flavorr ";
            $setWhere = true;
        }
        else {
            $query = $query." flavor = :flavorr ";
        }
        $hasFlavor = true;
    }
    if($brand != "") {
        if (!$setWhere) {
            $query = $query . " WHERE brand = :brandd ";
            $setWhere = true;
        } else {
            $query = $query . " brand = :brandd ";
        }
        $hasBrand = true;
    }
    if($sort == "price"){
        $query .=  " ORDER BY `price` ";
    }
    elseif ($sort == "name"){
        $query .=  " ORDER BY `name` ";
    }
    $statement = $conn->prepare($query);
    if($hasPrice){ $statement->bindValue(':pricee', $price);}
    if($hasSize){ $statement->bindValue(':sizee', $size);}
    if($hasBrand){ $statement->bindValue(':brandd', $brand);}
    if($hasFlavor){ $statement->bindValue(':flavorr', $flavor);}



    $statement->execute();
    $results = $statement->fetchAll();
    $statement->closeCursor();
    return $results;

}
?>