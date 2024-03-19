<?php
class Admin_Controller_Order extends Core_Controller_Admin_Action
{
    public function indexAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $orderPlace = $layout->createBlock('admin/order');
        $layout->getChild('head')->addCss('admin/order.css');
        $child->addChild('orderPlace', $orderPlace);
        $layout->toHtml();
    }
    public function saveAction()
    {
        $status = $this->getRequest()->getParams('status');
        Mage::getModel('sales/order')->setData($status)->save();
        $this->setRedirect('admin/order');
    }
}