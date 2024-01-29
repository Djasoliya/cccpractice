<?php
include 'sql/connection.php';
include 'sql/functions.php';

$cols = array("product_id","product_name","sku","category");
$query = select("ccc_product", $cols) . " ORDER BY product_id DESC LIMIT 20";

echo "<table border=1>";
echo "<tr><th>Product id</th><th>Product name</th><th>SKU</th><th>Category</th><th colspan=2>Action</th></tr>";
$sql = mysqli_query($conn, $query);
while($row=mysqli_fetch_assoc($sql)){
    echo "<tr><td>".$row['product_id']."</td>";
    echo "<td>".$row['product_name']."</td>";
    echo "<td>".$row['sku']."</td>";
    echo "<td>".$row['category']."</td>";
    echo "<td> <a href='product.php?action=edit&id={$row['product_id']}'>Update</a></td>";
    echo "<td> <a href='delete.php?action=delete&id={$row['product_id']}'>Delete</a></td></tr>";
}
echo "</table>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
            width:60%;
        }
        td {
            background-color:#d9d9e0 ;
            border: 1px solid black;
        }
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        td {
            font-weight: lighter;
        }
        td a{
            text-decoration:none;
        }

    </style>
</head>
<body>
</body>
</html>