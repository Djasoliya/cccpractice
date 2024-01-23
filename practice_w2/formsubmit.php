<html>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "", "ccc_practice");
if(!$conn){
    echo "connection failed .$conn->connect_error";
}
else{
    echo "connection success<br>";
}

$pname = $_POST['prodname'];
$sku = $_POST['sku'];
$radio = $_POST['radiobtn'];
$pcategory = $_POST['category'];
$manufacost = $_POST['manufacturercost'];
$shipcost = $_POST['shippingcost'];
$tcost = $_POST['totalcost'];
$prodprice = $_POST['price'];
$createdat = $_POST['createddate'];
$updatedat = $_POST['updateddate'];

$sql = "INSERT INTO ccc_product VALUES('$pname','$sku','$radio', '$pcategory','$manufacost','$shipcost','$tcost','$prodprice','$createdat','$createdat','$updatedat')";
if(mysqli_query($conn, $sql)){
    echo "new record inserted successfully";
}
else{
    echo "error".$conn->error;
}
?>

</body>
</html>