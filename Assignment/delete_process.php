<?php
include "db_connect.php";

$id = $_POST['id'];

$sql = "DELETE FROM products WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: display_products.php");
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>