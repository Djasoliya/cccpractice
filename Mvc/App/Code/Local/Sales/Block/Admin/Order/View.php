<?php
class Sales_Block_Admin_Order_View extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('sales/admin/order/view.phtml');
    }
    public function getOrderId()
    {
        return $this->getRequest()->getParams('id');
    }
    public function getOrderData()
    {
        $orderId = $this->getOrderId();
        return Mage::getModel('sales/order')->load($orderId);
    }
    public function getCustomerData($customerId)
    {
        return Mage::getModel('customer/customer')->load($customerId);
    }
    public function getOrderItemData($orderId)
    {
        return Mage::getModel('sales/order_item')->getCollection()->addFieldToFilter('order_id', $orderId);
    }
    public function getProductData($productId)
    {
        return Mage::getModel('catalog/product')->getCollection()->addFieldToFilter('product_id', $productId);
    }
}