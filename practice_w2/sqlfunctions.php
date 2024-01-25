<?php
function insert($table_name, $data){
    $columns = $values = [];
    foreach($data as $col => $val){
        $columns[] = "`$col`";
        $values[] = "'". addslashes($val). "'";
    }
    $columns = implode(",",$columns); 
    $values = implode(",",$values);                       
    echo "INSERT INTO {$table_name} ({$columns}) VALUES ({$values})";
}
insert("producttb",['prodname'=>'key','tcost'=>'200']);
// insert("producttb",$_POST['group1']);
echo "<br><br>";

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
    echo "UPDATE {$table_name} SET ({$columns}) WHERE ({$wherecond})";
}
update("tabledata",['prodname'=>'key','tcost'=>'200'],['id'=>7,'category'=>'office']);
// update("tabledata",$_POST['group2'],$_POST['group1']);
echo "<br><br>";

function delete($table_name,$where){
    $wherecond = [];
    foreach($where as $col=>$val){
        $wherecond[] = "`$col` = '$val'";
    }
    $wherecond = implode("AND",$wherecond);
    echo "DELETE FROM {$table_name} WHERE ({$wherecond})";
}
$wherecondi = array('id'=>7,'prodname'=>'keyboard','price'=>1000);
delete("tablen",$wherecondi);
// delete("tablen",$_POST['group1']);
// ?>