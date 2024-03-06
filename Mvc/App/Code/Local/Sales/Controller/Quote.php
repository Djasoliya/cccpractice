<?php
class Sales_Controller_Quote extends Core_Controller_Front_Action
{
    public function addAction()
    {
        $request = $this->getRequest()->getParams('cart');
        // print_r($request);

        $quote = Mage::getSingleton('sales/quote')
            ->addProduct($request);
    }
    public function deleteAction()
    {
        // $request = $this->getRequest()->getParams('cart');
        // print_r($request);
        $request = ['item_id' => 7, 'quote_id' => 1];
        $quote = Mage::getSingleton('sales/quote')
            ->removeProduct($request);
    }
    public function updateAction()
    {
        // $request = $this->getRequest()->getParams('cart');
        // print_r($request);
        // $a = Mage::getModel('core/session')->get('quote_id');
        // print_r($a);
        // die;
        $request = ['item_id' => 3, 'quote_id' => 1, 'product_id' => 3, 'qty' => 10];
        $quote = Mage::getSingleton('sales/quote')
            ->updateProduct($request);
    }
}
?>