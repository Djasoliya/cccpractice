<?php
class Model_Product extends Model_Abstract
{
    public $table_name = "ccc_product";
    public function __construct()
    {
    }
    public function insertData($data)
    {
        echo "<pre>";
        $query = $this->getQueryBuilder()->insert($this->table_name, $data);
        $this->getQueryBuilder()->exec($query);
    }
    public function selectData($where)
    {
        $query = $this->getQueryBuilder()->select($this->table_name, $columns = '', $where);
        $data = $this->getQueryBuilder()->exec($query);
        return $data;
    }
    public function deleteData($where)
    {
        $query = $this->getQueryBuilder()->delete(($this->table_name), $where);
        $this->getQueryBuilder()->exec($query);
        // return $data;
    }
    public function updateData($columns = [], $where)
    {
        $query = $this->getQueryBuilder()->update($this->table_name, $columns, $where);
        $data = $this->getQueryBuilder()->exec($query);
        return $data;
    }

    public function updateDeleteList($action, $id)
    {
        $modelRequest = new Model_Request();
        if ($action == 'edit') {
            $modelProductView = new View_Product();
            $result = $this->selectData(['product_id' => $id]);
            $modelProductView->setData($result);

            if ($modelRequest->isPost()) {
                $this->updateData($modelRequest->getParams('group'), ['product_id' => $id]);
                echo '<script>alert("Data update successfully");</script>';
                echo "<a href='?action=list'>View List Data</a><br>";
                echo "<a href='index.php'>Add New Product</a>";
            } else {
                echo $modelProductView->toHtml();
            }
        } elseif ($action == 'delete') {
            $this->deleteData(["product_id" => $id]);
            echo '<script>alert("Data delete successfully");</script>';
            echo "<a href='?action=list'>View List Data</a><br>";
            echo "<a href='index.php'>Add New Product</a>";
        } elseif ($action == 'list') {
            $viewList = new View_List();
            $result = $this->selectData($where = null);
            $data = $this->getQueryBuilder()->fetchAssoc($result);
            $viewList->displayData($data);
        }
    }
}
