<?php
class Core_Model_Request
{
    protected $_controllerName;
    protected $_actionName;
    protected $_moduleName;
    public function __construct()
    {
        $url = $this->getRequestUri();
        $url = explode("/", $url);
        $this->_controllerName=$url[0];
        $this->_actionName=$url[1];
        $this->_moduleName=$url[2];
    }
    public function getParams($key = '')
    {
        return ($key == '') ? $_REQUEST : (isset($_REQUEST[$key]) ? $_REQUEST[$key] : '');
    }
    public function getPostData($key = '')
    {
        return ($key == '') ? $_POST : (isset($_POST[$key]) ? $_POST[$key] : '');
    }
    public function getQueryData($key = '')
    {
        return ($key == '') ? $_GET : (isset($_GET[$key]) ? $_GET[$key] : '');
    }
    public function isPost()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return true;
        }
        return false;
    }
    public function getRequestUri()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $text  = str_replace("/practice/Root/", "",  $uri);
        return $text;
    }


    public function controllerName(){
        return $this->_controllerName;
    }
    public function actionName(){
        return $this->_actionName;
        
    }
    public function moduleName(){
        return $this->_moduleName;
        
    }
    public function getFullControllerClass(){
        return implode("_",['Page','Controller',ucfirst($this->_controllerName)]);
        // $fullControllerName = "Page_" . $this->_controllerName ."_".$this->_moduleName;
        // return $fullControllerName;
    }
}
