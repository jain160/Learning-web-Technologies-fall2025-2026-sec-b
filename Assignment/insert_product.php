<?php
include "db_connect.php";

$name = $_POST['name'];
$buying = $_POST['buying_price'];
$selling = $_POST['selling_price'];
$display = "No";

if (isset($_POST['display'])) {
    $display = "Yes";
}

$sql = "INSERT INTO products (name, buying_price, selling_price, display) 
        VALUES ('$name', $buying, $selling, '$display')";

if (mysqli_query($conn, $sql)) {
    echo "New product added!";
    echo "<br>";
    echo "<br><a href='display_products.php'>View all products</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>