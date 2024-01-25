<?php
function insert($table_name, $data){
    $columns = $values = [];
    foreach($data as $col => $val){
        $columns[] = "`$col`";
        $values[] = "'". addslashes($val). "'";
    }
    $columns = implode(",",$columns); 
    $values = implode(",",$values);                       
    return "INSERT INTO {$table_name} ({$columns}) VALUES ({$values})";
}
// insert("producttb",['prodname'=>'key','tcost'=>'200']);
// insert("producttb",$_POST['group1']);

function update($table_name, $cols, $where){
    $columns = $wherecond = [];
    foreach($cols as $col=>$val){
        $columns[] = "`$col` = '$val'";
    }
    foreach($where as $col=>$val){
        $wherecond[] = "`$col` = '$val'";
    }
    $columns = implode(",",$columns);
    $wherecond = implode("AND",$wherecond);
    return "UPDATE {$table_name} SET ({$columns}) WHERE ({$wherecond})";
}
// update("tabledata",['prodname'=>'key','tcost'=>'200'],['id'=>7,'category'=>'office']);
// update("tabledata",$_POST['group2'],$_POST['group1']);


function delete($table_name,$where){
    $wherecond = [];
    foreach($where as $col=>$val){
        $wherecond[] = "`$col` = '$val'";
    }
    $wherecond = implode("AND",$wherecond);
    return "DELETE FROM {$table_name} WHERE ({$wherecond})";
}
// $wherecondi = array('id'=>7,'prodname'=>'keyboard','price'=>1000);
// delete("tablen",$wherecondi);
// delete("tablen",$_POST['group1']);


function select($table_name,$cols){
    $columns = [];
    foreach($cols as $col=>$value){
        $columns[] = "`$value`";
    }
    $columns = implode(",",$columns);
    return "SELECT {$columns} FROM {$table_name}";
}
// $columns = array("product_name", "sku", "category");
// $var = select("table_name",$columns);
// echo $var;
// ?>