<?php
class Core_Controller_Front
{
    public function init()
    {
        $coreRequestModel = Mage::getModel('core/request');
        // $moduleName = $coreRequestModel->getModuleName();
        // $controllerName = $coreRequestModel->getControllerName();
        $actionName = $coreRequestModel->getActionName() . 'Action';
        $fullControllerClass = $coreRequestModel->getFullControllerClass();
        $fullControllerObj = new $fullControllerClass();
        // print_r($fullControllerObj);
        $fullControllerObj->$actionName();
    }
}
?>