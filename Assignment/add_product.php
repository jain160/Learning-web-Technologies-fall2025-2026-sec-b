<html>
<head>
    <title>Add Product</title>
    <style>
        label{
            display: inline-block;
            width: 100px;
        }
    </style>
</head>
<body>

<form action="insert_product.php" method="post">
    <fieldset>
        <legend>Add Product:</legend>
        <label>Name:</label> 
        <input type="text" name="name">
        <br>
        <br>
        <label>Buying Price:</label> 
        <input type="text" name="buying_price">
        <br>
        <br>
        <label>Selling Price:</label>  
        <input type="text" name="selling_price">
        <hr>
        <input type="checkbox" name="display" value="Yes">Display
        <hr>
        <input type="submit" value="SAVE"><br>
        <br>
        <a href="display_products.php">All Products</a>
        </fieldset>
</form>
</body>
</html>