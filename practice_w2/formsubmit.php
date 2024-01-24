<?php
include 'sqlfunctions.php';
include 'phpfunctions.php';

echo "<pre>";
print_r($_POST["group1"]);
print_r($_POST["group2"]);

$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "ccc_practice";
$conn = mysqli_connect($servername, $username, $password,$dbname);
if(!$conn){
    echo "connection failed .$conn->connect_error";
}
else{
    echo "connection success<br>";
}

$pname = postFrom('group1','prodname');
// $pname = getFrom('group1','prodname');
// $pname = requestFrom('group1','prodname');
$sku = postFrom('group1','sku');
$radio = postFrom('group1','radiobtn');
$pcategory = postFrom('group1','category');
$manufacost = postFrom('group1','manufacturercost');              
$shipcost = postFrom('group2','shippingcost');              
$tcost = postFrom('group2','totalcost');              
$prodprice = postFrom('group2','price');              
$createdat = postFrom('group2','createddate');              
$updatedat = postFrom('group2','updateddate');              

// $pname = $_POST['prodname'];
// $sku = $_POST['sku'];
// $radio = $_POST['radiobtn'];
// $pcategory = $_POST['category'];
// $manufacost = $_POST['manufacturercost'];
// $shipcost = $_POST['shippingcost'];
// $tcost = $_POST['totalcost'];
// $prodprice = $_POST['price'];
// $createdat = $_POST['createddate'];
// $updatedat = $_POST['updateddate'];

$sql = "INSERT INTO ccc_product (`product_name`,`sku`,`product_type`,`category`,`manufacturer_cost`,`shipping_cost`,`total_cost`,`price`,`status`,`created_at`,`updated_at`)VALUES('$pname','$sku','$radio', '$pcategory','$manufacost','$shipcost','$tcost','$prodprice','$createdat','$createdat','$updatedat')";
if(mysqli_query($conn, $sql)){
    echo "new record inserted successfully";
}
else{
    echo "error".$conn->error;
}
?>
