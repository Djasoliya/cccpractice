<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get data from the database</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root"; 
    $password = "";
    $dbname = "ccc_practice";
    $conn = mysqli_connect($servername, $username, $password,$dbname);

    $query = "SELECT * FROM ccc_product ORDER BY sr_no DESC LIMIT 10";
    $sql = mysqli_query($conn, $query);

    while($rows= mysqli_fetch_assoc($sql)){
        echo "<li>".$rows['product_name']." - ".$rows['sku']." - ".$rows['product_type']." - ".$rows['category']." - ".$rows['manufacturer_cost']." - ".$rows['shipping_cost']." - ".$rows['total_cost']." - ".$rows['price']." - ".$rows['status']." - ".$rows['created_at']." - ".$rows['updated_at']."</li>";   
    }

    // while($rows=$sql->fetch_assoc()){
    //     echo "<ul><li>{$rows['product_name']}</li>
    //             <li>{$rows['sku']}</li> </ul>";
    // }
    ?>
  <?php /* ?>  
    <table>
        <tr>
            <th>Product_name</th>
            <th>sku</th>
            <th>product_type</th>
            <th>category</th>
            <th>anufacturer_cost</th>
            <th>shipping_cost</th>
            <th>total_cost</th>
            <th>price</th>
            <th>status</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
        <?php
            while($rows=$sql->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $rows['product_name'];?></td>
            <td><?php echo $rows['sku'];?></td>
            <td><?php echo $rows['product_type'];?></td>
            <td><?php echo $rows['category'];?></td>
            <td><?php echo $rows['manufacturer_cost'];?></td>
            <td><?php echo $rows['shipping_cost'];?></td>
            <td><?php echo $rows['total_cost'];?></td>
            <td><?php echo $rows['price'];?></td>
            <td><?php echo $rows['status']." ";?></td>
            <td><?php echo $rows['created_at']." ";?></td>
            <td><?php echo $rows['updated_at'];?></td>
        </tr>

        <?php
            }
        ?>

    </table>
    <?php // */ ?>
</body>
</html>