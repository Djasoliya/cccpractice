<?php
class Controller_Front
{
    public function init()
    {
        $request = new Model_Request();
        $text = $request->gerRequestUri();
        $className = "View_" . ucwords(trim(str_replace("/", "_", $text), '_'));
        print_r($className);
        $layout = new $className();
        return $layout->toHtml();
    }
}
