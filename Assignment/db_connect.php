<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db   = "product_database";

$conn = mysqli_connect($host, $user, $pass, $db);

if($conn == false){
    echo "Database connection failed";
}
?>
