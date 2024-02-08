<?php
class Code_Controller_Front
{
    public function init()
    {
        $coreRequestModel = new Core_Model_Request();
        $moduleName = $coreRequestModel->getModuleName();
        $controllerName = $coreRequestModel->getControllerName();
        $actionName = $coreRequestModel->getActionName();

        $actionName .= "Action";
        $frontControllerClass = $coreRequestModel->getFullControllerClass();
        $frontControllerObj = new $frontControllerClass();
        // echo get_class($frontControllerObj);
        $frontControllerObj->$actionName();

        // $controller = new Code_Controller_Front();
        // $controller controllerName();
        // $controller actionName();
        // $controller moduleName();
        // $modelObj = Mage::GetModel("Core/request");
        // $modelObj->GetControllerName();
        // $modelObj->getRequestUri();


        // $action = $controller->getActionName();
        // $controller = $controller->getFullControllerClass();
        // $obj = new $controller();
        // $obj->$action . "Action";

        // echo get_class($obj);
    }
}
?>