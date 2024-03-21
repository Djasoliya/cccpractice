<?php
class Sales_Model_Order_History extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Sales_Model_Resource_Order_History';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Order_History';
        $this->_modelClass = 'sales/order_history';
    }
    public function addHistoryData($orderId)
    {
        $this->setData([
            'order_id' => $orderId,
            'from_status' => 'pandding',
            'to_status' => 'pandding',
            'action_by' => 0

        ])->save();
        return $this;
    }
    public function updateHistory($order, $actionBy)
    {
        $data = [
            'order_id' => $order['order_id'],
            'from_status' => $this->getfromStatus($order['order_id']),
            'to_status' => $order['status'],
            'action_by' => $actionBy
        ];
        // print_r($data);die;
        $this->setData($data)->save();
        return $this;
    }
    public function getfromStatus($orderId)
    {
        $order = Mage::getModel('sales/order')->getCollection()->addFieldToFilter('order_id', $orderId)->getFirstItem();
        $status = $order->getStatus();
        return $status;
    }
    public function getStatusOtions()
    {
        $statusOptions = [
            'panding' => 'Pending',
            'shipped' => 'Shipped',
            'canceled' => 'Canceled',
            'declined' => 'Declined',
            'funded' => 'Funded',
            'completed' => 'Completed'
        ];
        return $statusOptions;
    }
}