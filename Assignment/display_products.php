<?php
include "db_connect.php";

$sql = "SELECT * FROM products WHERE display = 'Yes'";
$result = mysqli_query($conn, $sql);
?>

<html>
<head>
    <title>Display Products</title>
</head>
<body>

    <fieldset>
        <legend>Registered Products:</legend>
<table border="1">
    <tr>
        <th colspan="4">DISPLAY</th>
    </tr>
    <tr>
        <th>NAME</th>
        <th>PROFIT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $profit = $row["selling_price"] - $row["buying_price"];
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $profit . "</td>";
            echo "<td>";
            echo "<a href='edit_product.php?id=" . $row["id"] . "'>edit</a> ";
            echo "</td>";
             echo "<td>";
            echo "<a href='delete_product.php?id=" . $row["id"] . "'>delete</a>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No products to show</td></tr>";
    }
    ?>

</table>
</fielsdset>
<br>
<a href="add_product.php">Add new product</a>
<hr>
<a href="search.php">Search product</a>

</body>
</html>

<?php mysqli_close($conn); ?>