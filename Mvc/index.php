<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="View/Styles.css">
</head>

<body>

    <?php
    include 'Lib/Autoload.php';
    class Ccc
    {
        public static function init()
        {
            $request = new Controller_Front();
            echo $request->init();
        }
    }
    Ccc::init();


    // $request = new Model_Request();

    // if ($request->getQueryData('action') == null) {
    //     if ($request->getPostData('group') == null) {
    //         $product = new View_Product();
    //         echo $product->toHtml();
    //         echo "<a href='?action=list'>View List Data</a><br>";
    //     } else {
    //         $product = new Model_Product();
    //         $product->insertData($request->getParams('group'));
    //         echo '<script>alert("Data added successfully");</script>';
    //         $view = new View_List();
    //         $result = $product->selectData($where = null);
    //         $data = $product->getQueryBuilder()->fetchAssoc($result);
    //         $view->displayData($data);
    //     }
    // } elseif ($request->getQueryData('action') == 'edit' || $request->getQueryData('action') ==  'delete' || $request->getQueryData('action') ==  'list') {
    //     $product = new Model_Product();
    //     $action = $request->getQueryData('action');
    //     $product_id = $request->getQueryData('id');
    //     $product->updateDeleteList($action, $product_id);
    // }


    ?>

</body>

</html>