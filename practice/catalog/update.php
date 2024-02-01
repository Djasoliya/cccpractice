<?php
include 'sql/connection.php';
include 'sql/functions.php';
include '/../practice_w2/phpfunctions.php';
$p_id = $_GET['product_id'];
$action=$_REQUEST['submit'];
$data = getParam("group1");

if($action=='update'){
    $where = array('product_id'=>$id);
    update("ccc_product",$data, $where);
    header("location: product_list.php");
    
    // if($result=mysqli_query($conn,$up)){
    //     echo "updated sucessfully";
    // }
}
elseif($action=='insert'){
    insert('ccc_product',$data);
        header("location: product_list.php");
    // if($result=mysqli_query($conn,$sql)){
    //     echo "inserted sucessfully";
// }
}

?>