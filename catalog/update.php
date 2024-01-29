<?php
include 'sql/connection.php';
include 'sql/functions.php';
include '/../practice_w2/phpfunctions.php';

$id = $_GET['product_id'];

    $data = getParam("group1");
    $where = array('product_id'=>$id);
    $up = update("ccc_product",$data, $where);
    
    mysqli_query($conn, $up);
    echo "<br> data is updated successfully";


?>