<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="View/styles.css">
</head>
<body>

<?php
include 'Lib/autoload.php';
$request = new Model_Request();

if($request->getQueryData('action') == null) {
    if ($request->getPostData('group') == null) {
        $product = new View_Product();
        echo $product->tohtml();
        echo "<a href='?action=list'>View List Data</a><br>";
    } 
    else
    {
        $product = new Model_Product();
        $product->insertData($request->getparams('group'));
        echo '<script>alert("Data added successfully");</script>';
        $view = new View_List();
        $result = $product->selectData($where=null);
        $data = $product->getQueryBuilder()->fetchAssoc($result);
        $view->displayData($data);
    }
} 
elseif ($request->getquerydata('action') == 'edit' || $request->getquerydata('action') ==  'delete' || $request->getquerydata('action') ==  'list'){
    $product = new Model_Product();
    $action = $request->getquerydata('action');
    $product_id = $request->getquerydata('id');
    $product->updateDeleteList($action, $product_id);
}
?>

</body>
</html>