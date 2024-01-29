<?php
include 'connection.php';

function insert($table_name, $data){
    global $conn;
    $columns = $values = [];
    foreach($data as $col => $val){
        $columns[] = "`$col`";
        $values[] = "'". addslashes($val). "'";
    }
    $columns = implode(",",$columns); 
    $values = implode(",",$values);                       
    $insertquery = "INSERT INTO {$table_name} ({$columns}) VALUES ({$values})";
    mysqli_query($conn, $insertquery);
}
// insert("producttb",['prodname'=>'key','tcost'=>'200']);
// insert("producttb",$_POST['group1']);

function update($table_name, $cols, $where){
    global $conn;
    $columns = $wherecond = [];
    foreach($cols as $col=>$val){
        $columns[] = "`$col` = '$val'";
    }
    foreach($where as $col=>$val){
        $wherecond[] = "`$col` = '$val'";
    }
    $table_name = "`$table_name`";
    $columns = implode(",",$columns);
    $wherecond = implode("AND",$wherecond);
    $updatequery = "UPDATE {$table_name} SET {$columns} WHERE ({$wherecond})";
    mysqli_query($conn, $updatequery);
}
// update("tabledata",['prodname'=>'key','tcost'=>'200'],['id'=>7,'category'=>'office']);
// update("tabledata",$_POST['group2'],$_POST['group1']);


function delete($table_name,$where){
    global $conn;
    $wherecond = [];
    foreach($where as $col=>$val){
        $wherecond[] = "`$col` = '$val'";
    }
    $wherecond = implode("AND",$wherecond);
    $deletequery = "DELETE FROM {$table_name} WHERE ({$wherecond})";
    mysqli_query($conn, $deletequery);
}
// $wherecondi = array('id'=>7,'prodname'=>'keyboard','price'=>1000);
// delete("tablen",$wherecondi);
// delete("tablen",$_POST['group1']);


function select($table_name,$cols){
    global $conn;
    $columns = [];
    foreach($cols as $col=>$value){
        $columns[] = "`$value`";
    }
    $columns = implode(",",$columns);
    $selectquery = "SELECT {$columns} FROM {$table_name}";
    $result=$conn->query($selectquery);
    return $result;
}

// $columns = array("product_name", "sku", "category");
// $var = select("table_name",$columns);
// echo $var;

function selectorder($table_name,$cols,$colname, $val){
    global $conn;
    $columns = [];
    foreach($cols as $col=>$value){
        $columns[] = "`$value`";
    }
    $columns = implode(",",$columns);
    $selectquery = "SELECT {$columns} FROM {$table_name} ORDER BY {$colname} DESC LIMIT {$val}";
    $result=$conn->query($selectquery);
    return $result;
}

function selectwhere($table_name,$cols,$where){
    global $conn;
    $columns = $wherecond = [];
    foreach($cols as $col=>$value){
        $columns[] = "`$value`";
    }
    foreach($where as $col=>$value){
        $wherecond[] = "`$col` = '$value'";
    }
    $columns = implode(",",$columns);
    $wherecond = implode("AND",$wherecond);
    $selectquery = "SELECT {$columns} FROM {$table_name} WHERE {$wherecond}";
    $result=$conn->query($selectquery);
    return $result;
}
?>