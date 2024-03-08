<?php
class Sales_Controller_Quote extends Core_Controller_Front_Action
{
    public function addAction()
    {
        $request = $this->getRequest()->getParams('cart');
        $quote = Mage::getSingleton('sales/quote')
            ->addProduct($request);
        $this->setRedirect('cart');
    }
    public function deleteAction()
    {
        $itemId = $this->getRequest()->getParams('id');
        $request = ['item_id' => $itemId];
        $quote = Mage::getSingleton('sales/quote')
            ->removeProduct($request);
        $this->setRedirect('cart');
    }
    public function updateAction()
    {
        $request = $this->getRequest()->getParams('cart');
        $quote = Mage::getSingleton('sales/quote')
            ->updateProduct($request);
        $this->setRedirect('cart');
    }
}
?>