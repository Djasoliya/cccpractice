<?php
class View_Product_List
{
    public function toHtml()
    {
        $request = new Model_Request();
        if ($request->getQueryData('action') == null) {
            if ($request->getPostData('group') == null) {
                $product = new View_Product();
                echo $product->toHtml();
                echo "<a href='?action=list'>View List Data</a><br>";
            } else {
                $product = new Model_Product();
                $product->insertData($request->getParams('group'));
                echo '<script>alert("Data added successfully");</script>';
                $view = new View_List();
                $result = $product->selectData($where = null);
                $data = $product->getQueryBuilder()->fetchAssoc($result);
                $view->displayData($data);
            }
        } elseif ($request->getQueryData('action') == 'edit' || $request->getQueryData('action') ==  'delete' || $request->getQueryData('action') ==  'list') {
            $product = new Model_Product();
            $action = $request->getQueryData('action');
            $product_id = $request->getQueryData('id');
            $product->updateDeleteList($action, $product_id);
        }
    }
}
