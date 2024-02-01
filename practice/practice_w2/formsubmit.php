<?php
include 'sqlfunctions.php';
include 'phpfunctions.php';

echo "<pre>";
// print_r($_POST["group1"]);
// print_r($_POST["group2"]);

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

$data = getParam("group1");
print_r($data);

// $sku = postFrom('group1','prodname');
// $pname = getFrom('group1','prodname');
// $pname = requestFrom('group1','prodname');
$sql = insert("ccc_product", $data);

if(mysqli_query($conn,$sql)){
    echo "new record inserted successfully";
}
else{
    echo "error".$conn->error;
}

// $sql = "INSERT INTO ccc_product (`product_name`,`sku`,`product_type`,`category`,`manufacturer_cost`,`shipping_cost`,`total_cost`,`price`,`status`,`created_at`,`updated_at`)VALUES('$pname','$sku','$radio', '$pcategory','$manufacost','$shipcost','$tcost','$prodprice','$createdat','$createdat','$updatedat')";
?>
