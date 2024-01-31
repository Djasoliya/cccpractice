<?php
include 'connection.php';
class SQlQueryExecutor{
    public function insert($table_name, $data){
        global $conn;
        $insert = new SQLQueryBuilder();
        $insertquery = $insert->insert($table_name,$data);
        if($result=$conn->query($insertquery)){
            echo true;
        }
        else{
            echo "Error";
        }
    }
    public function update($table_name, $cols, $where){
        global $conn;
        $update = new SQLQueryBuilder();
        $updatequery = $update->update($table_name,$cols,$where);
        if($result=$conn->query($updatequery)){
            return true;
        }
        else{
            echo "Error";
        }
    }
    public function delete($table_name,$where){
        global $conn;
        $delete = new SQLQueryBuilder();
        $deletequery = $delete->delete($table_name,$where);
        if($result=$conn->query($deletequery)){
            echo true;
        }
        else{
            echo "error";
        }
    }
    public function select($table_name,$cols){
        global $conn;
        $select = new SQLQueryBuilder();
        $selectquery = $select->select($table_name,$cols);
        // if($result=$conn->query($selectquery)){
        //     echo true;
        // }
        // else{
        //     echo "error";
        // }
        $result = $conn->query($selectquery);   
        if ($result) {
            return $result;
        } else {
            echo "Error: " . $conn->error;
            return false;
        }
    }
    function selectorder($table_name,$cols,$colname,$mode,$val){
        global $conn;
        $select = new SQLQueryBuilder();
        $selectquery = $select->selectorder($table_name,$cols,$colname,$mode,$val);
        // $selectexecute = new SQlQueryExecutor();
        // $result = $selectexecute->fetchAssoc($conn, $selectquery);
        // print_r($result);
        $result = $conn->query($selectquery);
        if ($result) {
            return $result;
        } else {
            echo "Error: " . $conn->error;
            return false;
        }
    }
    function selectwhere($table_name,$cols,$where){
        global $conn;
        $select = new SQLQueryBuilder();
        $selectquery = $select->selectwhere($table_name,$cols,$where);
        $result = $conn->query($selectquery);
        if ($result) {
            return $result;
        } else {
            echo "Error: " . $conn->error;
            return false;
        }
    }
    // public function fetchAssoc($conn ,$sqlQuery){
    //     $result = $conn->query($sqlQuery);
        public function fetchAssoc($result){
        $data=[];
        while($row=mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
        return $data;
    }
}
$obj = new SQlQueryExecutor();
$cols = array("product_name","sku","product_type","category","manufacturer_cost","shipping_cost","total_cost","price","status","created_at","updated_at");

$result = $obj->selectorder("ccc_product",$cols,"product_id","DESC", 20);

if ($result) {
    $data = $obj->fetchAssoc($result);
    print_r($data);
    echo "<br>";
}

// $obj=new SQLQueryExecutor();
// $sql="SELECT * FROM ccc_product ORDER BY product_id DESC LIMIT 10;";
// $result=mysqli_query($conn,$sql);
// echo "Product_name,SKU,Product_type,Category,Manufacturer_cost,Shipping_cost,Total_cost,Price,Status,Created_at,Updated_at <br>";
// $row=$obj->fetchAssoc($result);
// foreach ($row as $key => $value) {
//     print_r($value);
//     echo "<br><br>";
// }

class SQLQueryBuilder{
    public function insert($table_name, $data){
        $columns = $values = [];
        foreach($data as $col => $val){
            $columns[] = "`$col`";
            $values[] = "'". addslashes($val). "'";
        }
        $columns = implode(",",$columns); 
        $values = implode(",",$values);                       
        return "INSERT INTO {$table_name} ({$columns}) VALUES ({$values})";
    }
    
    public function update($table_name, $cols, $where){
        $columns = $wherecond = [];
        foreach($cols as $col=>$val){
            $columns[] = "`$col` = '$val'";
        }
        foreach($where as $col=>$val){
            $wherecond[] = "`$col` = '$val'";
        }
        $columns = implode(",",$columns);
        $wherecond = implode("AND",$wherecond);
        return "UPDATE {$table_name} SET {$columns} WHERE {$wherecond}";
    }
    
    public function delete($table_name,$where){
        $wherecond = [];
        foreach($where as $col=>$val){
            $wherecond[] = "`$col` = '$val'";
        }
        $wherecond = implode("AND",$wherecond);
        return "DELETE FROM {$table_name} WHERE ({$wherecond})";
    }
    public function select($table_name,$cols){
        $columns = [];
        foreach($cols as $col=>$value){
            $columns[] = "`$value`";
        }
        $columns = implode(",",$columns);
        return "SELECT {$columns} FROM {$table_name}";
    }
    function selectorder($table_name,$cols,$colname, $mode,$val){
        $columns = [];
        foreach($cols as $col=>$value){
            $columns[] = "`$value`";
        }
        $columns = implode(",",$columns);
        return "SELECT {$columns} FROM {$table_name} ORDER BY {$colname} {$mode} LIMIT {$val}";
    }
    function selectwhere($table_name,$cols,$where){
        $columns = $wherecond = [];
        foreach($cols as $col=>$value){
            $columns[] = "`$value`";
        }
        foreach($where as $col=>$value){
            $wherecond[] = "`$col` = '$value'";
        }
        $columns = implode(",",$columns);
        $wherecond = implode("AND",$wherecond);
        return "SELECT {$columns} FROM {$table_name} WHERE {$wherecond}";
    }
}

// $obj= new SQlQueryExecutor();
// $obj->insert("ccc_category",array("cat_id"=>40,"name"=>"hello"));
// $obj= new SQlQueryExecutor();
// $a= array("name"=>"key");
// $b =array("cat_id"=>7);
// $obj->update("ccc_category",$a,$b);
// $obj= new SQlQueryExecutor();
// $obj->delete("ccc_category",array("cat_id"=>40,"name"=>"hello"));
// $obj =new SQlQueryExecutor();
// $obj->select("ccc_category",array("name","cat_id"));
?>