<?php
include "db_connect.php";
$sql = "SELECT * FROM products WHERE display = 'Yes'";
$result = mysqli_query($conn, $sql);
?>

<html>
<head>
    <title>Search Product</title>

    <script>
    function searchProducts() {
        var searchValue = document.getElementById("searchBox").value.trim();

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("productTable").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "search_result.php?q=" + encodeURIComponent(searchValue), true);
        xmlhttp.send();
    }

    window.onload = function() {
        searchProducts();
    };
    </script>
</head>
<body>

<fieldset>
        <legend>Search Products:</legend>
<input type="text" id="searchBox" placeholder="Search By Name">
<input type="button" value="Search" onclick="searchProducts()">

<br><br>

<div id="productTable">
    Loading products...
</div>

<br>
<a href="display_products.php">Back All Products</a>
<br>
<br>
<a href="add_product.php">Add new product</a>

</fieldset>
</body>
</html>

<?php mysqli_close($conn); ?>