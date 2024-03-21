<?php
class Cart_Block_Checkout extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('cart/checkout.phtml');
    }
    public function getCustomerAddress()
    {
        $cusomerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
        return Mage::getModel('customer/address')->getCollection()->addFieldToFilter('customer_id', $cusomerId);
    }
    public function getPaymentOption()
    {
        return Mage::getModel('sales/order_payment')->getPaymentOtions();
    }
    public function getShippingOption()
    {
        return Mage::getModel('sales/order_shipping')->getShippingOtions();
    }
}