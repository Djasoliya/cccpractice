<?php
class Sales_Model_Order extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Sales_Model_Resource_Order';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Order';
        $this->_modelClass = 'sales/order';
    }
    public function _beforeSave()
    {
        $orderNumber = rand(1000000, 9999999);

        $flag = True;
        while ($flag) {
            $existOrderNumber = Mage::getModel('sales/order')
                ->getCollection()
                ->addFieldToFilter('order_number', $orderNumber)
                ->getFirstItem();
            if (!$existOrderNumber) {
                $flag = False;
            }
            $orderNumber = rand(1000000, 9999999);
        }
        $this->addData('order_number', $orderNumber);
    }
    public function addOrder(Sales_Model_Quote $orderData, $customerId)
    {
        $this->setData($orderData->getData())
            ->removeData('quote_id')
            ->removeData('order_id')
            ->removeData('payment_id')
            ->removeData('shipping_id')
            ->removeData('customer_id')
            ->addData('customer_id', $customerId)
            ->save();
        return $this;
    }
}
