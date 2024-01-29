<?php
include 'sql/connection.php';
include 'sql/functions.php';
$data=$_POST['group1'];
insert('ccc_category',$data);
// if($result=mysqli_query($conn,$sql)){
//     echo "data is inserted";
// }

?>