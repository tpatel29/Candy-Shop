<?php
/*$servername = "sql1.njit.edu";
$username = "tp29";
$password = "Password595!";
$dbname = "tp29"; //your database name*/

try {
    $conn = new PDO("mysql: host=localhost;dbname=todo;", "root","");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    echo "</br>";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}