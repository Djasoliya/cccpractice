<?php
class Model_Product extends Model_Abstract{
    public $table_name = "ccc_product";
    public function __construct()
    {
        
    }
    public function insertData($data){
        echo "<pre>";
        $query = $this->getQueryBuilder()->insert($this->table_name, $data);
        $this->getQueryBuilder()->exec($query);
    }
    public function selectData($where){
        $query = $this->getQueryBuilder()->select($this->table_name,$columns= '', $where);
        $data = $this->getQueryBuilder()->exec($query);
        return $data;
    }
    public function deleteData($where){
        $query = $this->getQueryBuilder()->delete(($this->table_name),$where);
        $data = $this->getQueryBuilder()->exec($query);
    }
    public function updateData($columns=[], $where){
        $query = $this->getQueryBuilder()->update($this->table_name,$columns,$where);
        $data = $this->getQueryBuilder()->exec($query);
        return $data;
    }

    public function updateDeleteList($action, $id){
        $request = new Model_Request();
        if ($action == 'edit') {
            $productView = new View_Product();
            $result = $this->selectData(['product_id'=>$id]);
            $productView->setData($result);
            
            if ($request->isPost()) {
                $this->updateData($request->getParams('group'),['product_id'=>$id]);
                echo '<script>alert("Data update successfully");</script>';
                echo "<a href='?action=list'>View List Data</a><br>";
                echo "<a href='index.php'>Add New Product</a>";
            } else {
                echo $productView->toHtml();
            }
        }
        elseif ($action == 'delete') {
            $this->deleteData(["product_id"=>$id]);
            echo '<script>alert("Data delete successfully");</script>';
            echo "<a href='?action=list'>View List Data</a><br>";
            echo "<a href='index.php'>Add New Product</a>";
        }
        elseif($action == 'list'){
            $view = new View_List();
            $result = $this->selectData($where=null);
            $data = $this->getQueryBuilder()->fetchAssoc($result);
            $view->displayData($data);
        }
    }
}
?>