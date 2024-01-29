<?php
include 'sql/connection.php';
include 'sql/functions.php';

if($_GET['action']=='delete'){
    $p_id=$_GET['id'];
    $where = array('product_id'=>$p_id);
    $del = delete("ccc_product",$where);
    mysqli_query($conn,$del);
    echo "data is deleted successfully";
}
else{
    echo "item not deleted";
}

?> 