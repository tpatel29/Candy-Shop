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
function get_All_Products(){
    global $conn;
    $query = 'SELECT * FROM Products';
    $statement = $conn->prepare($query);
    $statement->execute();
    $results = $statement->fetchAll();
    $statement->closeCursor();
    return $results;
}
?>