<?php
class Sales_Controller_Quote extends Core_Controller_Admin_Action
{
    public function addAction()
    {
        $cart = $this->getRequest()->getParams('sales');
        print_r($cart);
    }
}
?>