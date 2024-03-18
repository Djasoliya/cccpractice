<?php
class Customer_Controller_View extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $view = $layout->createBlock('customer/view');
        $layout->getChild('head')->addCss('customer/view.css');
        $child->addChild('view', $view);
        $layout->toHtml();
    }
}