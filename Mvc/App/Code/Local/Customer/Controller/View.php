<?php
class Customer_Controller_View extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $view = $layout->createBlock('customer/view');
        $layout->getChild('head')->addCss('customer/view.css');
        $child->addChild('view', $view);
        $layout->toHtml();
    }
    // public function cancelAction()
    // {
    //     $orderId = $this->getRequest()->getParams('id');
    //     // print_r($orderId);
    //     $data = Mage::getModel('sales/order')->load($orderId)->getStatus();
    //     Mage::getModel('sales/order_history')->setData(
    //         [
    //             'order_id' => $orderId,
    //             'from_status' => $data,
    //             'to_status' => 'cancle',
    //             'action_by' => 0
    //         ]
    // )->save();
    // }
    public function cancelAction()
    {
        $orderId = $this->getRequest()->getParams('id');
        $data = [
            'order_id' => $orderId,
            'status' => 'cancel_request'
        ];
        Mage::getModel('sales/order_history')->updateHistory($data, 0);
        Mage::getModel('sales/order')->setData($data)->save();
        $this->setRedirect('customer/view');
    }
}