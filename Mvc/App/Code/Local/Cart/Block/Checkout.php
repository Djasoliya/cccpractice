<?php
class Cart_Block_Checkout extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('cart/checkout.phtml');
    }
    public function getQuoteId()
    {
        return Mage::getSingleton('core/session')->get('quote_id');
    }
    public function getCustomerId()
    {
        return Mage::getSingleton('core/session')->get('logged_in_customer_id');
    }
    // public function getCustomerAddress()
    // {
    //     $customerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
    //     return Mage::getModel('customer/customer')->load($customerId);
    // }
    public function getQuoteCustomerId()
    {
        return Mage::getModel('sales/quote_customer')->getCollection()->addFieldToFilter('quote_id', $this->getQuoteId);
    }
    public function getCustomerAddress()
    {
        $cusomerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
        return Mage::getModel('customer/address')->getCollection()->addFieldToFilter('customer_id', $cusomerId);
    }

}