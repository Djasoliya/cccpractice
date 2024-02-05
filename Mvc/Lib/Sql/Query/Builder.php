<?php
class Lib_Sql_Query_Builder extends Lib_Connection{
    public function __construct()
    {
        
    }
    public function insert($table_name, $data){
        $columns = $values = [];
        foreach($data as $key => $val){
            $columns[] = sprintf("`%s`",$key);
            $values[] = sprintf("'%s'",addslashes($val));
        }
        $columns = implode(',',$columns);
        $values = implode(',',$values);
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

    public function select($table_name,$columns,$where){
        $whereCond = [];
        if (isset($where)) {
            foreach ($where as $field => $val) {
                $whereCond[] = " `$field` = '" . addslashes($val) . "'";
            }
        }
        $columns = (is_array($columns) && count($columns) > 0) ? implode(",", $columns) : '*';
        $whereCond = implode(" AND ", $whereCond);
        $sql = ($where == null) ? "SELECT {$columns} FROM {$table_name}" : "SELECT {$columns} FROM {$table_name} WHERE {$whereCond};";
        return $sql;
    }
    

    public function fetchAssoc($result){
        $data=[];
        while($row=mysqli_fetch_assoc($result)){
            $data[]=$row;   
        }
        return $data;
    }
}
?>