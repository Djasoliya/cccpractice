<?php
class View_Product_List
{
    public function toForm()
    {
        $modelRequest = new Model_Request();
        if ($modelRequest->getQueryData('action') == null) {
            if ($modelRequest->getPostData('group') == null) {
                $this->newForm();
            } elseif ($modelRequest->getParams('group')) {
                $this->save();
            }
        } elseif ($modelRequest->getRequestUri()) {
            $url = $modelRequest->getRequestUri();
            // echo "<br>" . $url . "<br>";
            $substr1 = stristr($url, '?');
            $substr1 = str_replace("?", "", $substr1);
            $arr = explode("&", $substr1);
            $resultArray = array();
            foreach ($arr as $item) {
                list($key, $value) = explode('=', $item);
                $resultArray[$key] = $value;
            }
            $action = $resultArray['action'];
            echo $action;
            $id = $resultArray['id'];
            // echo $id;
            if ($action == 'delete') {
                $this->delete($id);
            } elseif ($action == 'edit') {
                $this->update($id);
            }
        }
    }
    public function newForm()
    {
        $modelProduct = new View_Product();
        echo $modelProduct->toHtml();
    }
    public function save()
    {
        $modelRequest = new Model_Request();
        $modelProduct = new Model_Product();
        $modelProduct->insertData($modelRequest->getParams('group'));
        echo '<script>alert("Data added successfully");</script>';
        $this->listView();
    }
    public function delete($id)
    {
        $modelProduct = new Model_Product();
        $modelProduct->deleteData(["product_id" => $id]);
        echo '<script>alert("Data delete successfully");</script>';
        $this->listView();
    }
    public function update($id)
    {
        $modelProduct = new Model_Product();
        $modelRequest = new Model_Request();
        $modelProductView = new View_Product();
        $result = $modelProduct->selectData(['product_id' => $id]);
        $modelProductView->setData($result);

        if ($modelRequest->isPost()) {
            $a = $modelProduct->updateData($modelRequest->getParams('group'), ['product_id' => $id]);
            print_r($a);
            echo '<script>alert("Data update successfully");</script>';
            $this->listView();
        } else {
            echo $modelProductView->toHtml();
        }
    }
    public function listView()
    {
        $modelProduct = new Model_Product();
        $viewList = new View_List();
        $result = $modelProduct->selectData($where = null);
        $data = $modelProduct->getQueryBuilder()->fetchAssoc($result);
        $viewList->displayData($data);
    }
}
