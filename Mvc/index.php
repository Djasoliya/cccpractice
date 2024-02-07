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
            $modelRequest = new Controller_Front();
            echo $modelRequest->init();
        }
    }
    Ccc::init();


    // $modelRequest = new Model_Request();

    // if ($modelRequest->getQueryData('action') == null) {
    //     if ($modelRequest->getPostData('group') == null) {
    //         $modelProduct = new View_Product();
    //         echo $modelProduct->toHtml();
    //         echo "<a href='?action=list'>View List Data</a><br>";
    //     } else {
    //         $modelProduct = new Model_Product();
    //         $modelProduct->insertData($modelRequest->getParams('group'));
    //         echo '<script>alert("Data added successfully");</script>';
    //         $viewList = new View_List();
    //         $result = $modelProduct->selectData($where = null);
    //         $data = $modelProduct->getQueryBuilder()->fetchAssoc($result);
    //         $viewList->displayData($data);
    //     }
    // } elseif ($modelRequest->getQueryData('action') == 'edit' || $modelRequest->getQueryData('action') ==  'delete' || $modelRequest->getQueryData('action') ==  'list') {
    //     $modelProduct = new Model_Product();
    //     $action = $modelRequest->getQueryData('action');
    //     $modelProduct_id = $modelRequest->getQueryData('id');
    //     $modelProduct->updateDeleteList($action, $modelProduct_id);
    // }


    ?>

</body>

</html>