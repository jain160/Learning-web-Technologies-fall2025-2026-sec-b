<?php
include "db_connect.php";

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<html>
<head>
    <title>Edit Product</title>
    <style>
        label{
            display: inline-block;
            width: 100px;
        }
    </style>
</head>
<body>

<form action="update_product.php" method="post">
    <fieldset>
        <legend>Edit Products Specifications:</legend>
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    
    <label>Name:</label> 
    <input type="text" name="name" value="<?php echo $row['name']; ?>">
    <br>
    <br>
    <label>Buying Price:</label>  
    <input type="text" name="buying_price" value="<?php echo $row['buying_price']; ?>">
    <br>
    <br>
    <label>Selling Price:</label>  
    <input type="text" name="selling_price" value="<?php echo $row['selling_price']; ?>">
    <hr>
    
    <?php
    $checked = "";
    if ($row['display'] == "Yes") {
        $checked = "checked";
    }
    ?>
    <input type="checkbox" name="display" value="Yes" <?php echo $checked; ?>> Display
    <hr>
    <input type="submit" value="SAVE">
    </fieldset>
</form>

</body>
</html>

<?php mysqli_close($conn); ?>