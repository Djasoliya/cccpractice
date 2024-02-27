<?php
class Customer_Controller_Account extends Core_Controller_Front_Action
{

    public function registerAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $layout->getChild('head')->addCss('product/form.css');

        $productForm = $layout->createBlock('customer/customer');
        $child->addChild('form', $productForm);

        $layout->toHtml();
    }
    public function saveAction()
    {

    }
    public function loginAction()
    {

    }
    public function dashboardAction()
    {

    }
    public function forgotPasswordAction()
    {

    }
}
?>