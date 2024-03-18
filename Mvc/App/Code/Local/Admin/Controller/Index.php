<?php
class Admin_Controller_Index extends Core_Controller_Admin_Action
{
    public function indexAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $orderPlace = $layout->createBlock('customer/order');
        $layout->getChild('head')->addCss('customer/order.css');
        $child->addChild('orderPlace', $orderPlace);
        $layout->toHtml();
    }
}

?>