<?php

class Sales_Model_Quote_Shipping extends Core_Model_Abstract
{

    public function init()
    {
        $this->_resourceClass = 'Sales_Model_Resource_Quote_Shipping';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Quote_Shipping';
        $this->_modelClass = 'sales/quote_customer';
    }
    public function addShippingMethod(Sales_Model_Quote $quote, $request)
    {
        // print_r($request);
        // echo "<pre>";

        $item = $this->getCollection()
            ->addFieldToFilter('quote_id', $quote->getId())
            ->getFirstItem();

        $this->setData(
            $request
        );
        if ($item) {
            $this->setId($item->getId());
        }
        // print_r("1".$item."2");
        $this->addData('quote_id', $quote->getId());
        // print_r($this);
        // die;
        $this->save();

        return $this;
    }
}