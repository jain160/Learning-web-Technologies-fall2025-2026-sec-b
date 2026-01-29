<?php
include "db_connect.php";

$id = $_POST['id'];
$name = $_POST['name'];
$buying = $_POST['buying_price'];
$selling = $_POST['selling_price'];
$display = "No";

if (isset($_POST['display'])) {
    $display = "Yes";
}

$sql = "UPDATE products SET 
        name = '$name', 
        buying_price = $buying, 
        selling_price = $selling, 
        display = '$display' 
        WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: display_products.php");
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>