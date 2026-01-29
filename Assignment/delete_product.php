<?php
include "db_connect.php";

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<html>
<head>
    <title>Delete Product</title>
</head>
<body>

<form action="delete_process.php" method="post">
    <fieldset>
        <legend>Remove Products:</legend>
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    
    Name: <?php echo $row['name']; ?><br>
    Buying Price: <?php echo $row['buying_price']; ?>
    <br>
    Selling Price: <?php echo $row['selling_price']; ?>
    <br>
    Displayable: <?php echo $row['display']; ?>
    <hr>
    <input type="submit" value="Delete">
    
    </fieldset>
</form>

</body>
</html>

<?php mysqli_close($conn); ?>