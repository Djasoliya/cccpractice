<?php
class Cart_Block_Cart extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('cart/cart.phtml');
    }
    public function getList()
    {
        $quoteId = Mage::getModel('core/session')->get('quote_id');
        $data = Mage::getModel('sales/quote_item')->getCollection()->addFieldToFilter('quote_id', $quoteId);
        // echo "<pre>";
        // print_r($data);
        return $data;

    }
    public function getProductList($id)
    {
        $quoteId = Mage::getModel('catalog/product')->getCollection()->addFieldToFilter('product_id', $id);
        return $quoteId;

    }
    public function grandTotal($quoteId)
    {
        return Mage::getModel('sales/quote')->getCollection()->addFieldToFilter('quote_id', $quoteId);
    }
}