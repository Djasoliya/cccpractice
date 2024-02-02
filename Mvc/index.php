<?php
include 'Lib/autoload.php';
    $request = new Model_Request();
    if(!$request->isPost()){
        $product = new View_Product();
        echo $product->toHtml();
    }
    else{
        $product = new Model_Product();
        $product->save($request->getParams('group'));
        $view = new View_List();
        $result = $product->selectData();
        $data = [];
        foreach($result as $value) {
            $data[] = $value;
        }
        $view->displayData($data);
    }

?>