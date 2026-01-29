<?php
include "db_connect.php";

$q = isset($_GET["q"]) ? $_GET["q"] : "";
if ($q == "") {
    $sql = "SELECT * FROM products WHERE display = 'Yes'";
} else {
    $sql = "SELECT * FROM products WHERE name LIKE '%$q%' AND display = 'Yes'";
}

$result = mysqli_query($conn, $sql);
?>

<table border="1">
    <tr>
        <th colspan="4">DISPLAY</th>
    </tr>
    <tr>
        <th>NAME</th>
        <th>PROFIT</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $profit = $row["selling_price"] - $row["buying_price"];
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $profit . "</td>";
            echo "<td><a href='edit_product.php?id=" . $row["id"] . "'>edit</a></td>";
            echo "<td><a href='delete_product.php?id=" . $row["id"] . "'>delete</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No matching products found</td></tr>";
    }
    ?>

</table>

<?php mysqli_close($conn); ?>