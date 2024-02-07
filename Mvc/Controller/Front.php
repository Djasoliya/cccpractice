<?php
class Controller_Front
{
    public function init()
    {
        $modelRequest = new Model_Request();
        $text = $modelRequest->getRequestUri();
        $text = explode("/", $text);
        // echo "<br>";
        $toForm = array_pop($text);
        // print_r($toForm);
        echo "<br>";
        $className = "View_" . implode("_", array_map('ucfirst', $text));
        // print_r($className);
        $layout = new $className();
        $layout->toForm();
    }
    // public function init()
    // {
    //     $modelRequest = new Model_Request();
    //     $text = $modelRequest->gerRequestUri();
    //     $className = "View_" . ucwords(trim(str_replace("/", "_", $text), '_'));
    //     print_r($className);
    //     $layout = new $className();
    //     echo $layout->toForm();
    // }
}
