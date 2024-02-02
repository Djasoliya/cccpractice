<?php
class Model_Product extends Model_Abstract{
    public $table_name = "ccc_product";
    public function __construct()
    {
        
    }
    public function save($data){
        echo "<pre>";
        $query = $this->getQueryBuilder()->insert($this->table_name, $data);
        $this->getQueryBuilder()->exec($query);
    }
    public function selectData(){
        $query = $this->getQueryBuilder()->select($this->table_name);
        $data = $this->getQueryBuilder()->exec($query);
        return $data;
    }
}
?>