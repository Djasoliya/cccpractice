<?php
class Sales_Model_Quote extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Sales_Model_Resource_Quote';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Quote';
        $this->_modelClass = 'sales/quote';
    }
    public function initQuote()
    {
        $quoteId = Mage::getSingleton("core/session")->get("quote_id");
        if ($quoteId) {
            $this->load($quoteId);
        }
        if (!$this->getId()) {
            $customerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
            $quote = Mage::getModel("sales/quote")
                ->setData(["tax_percent" => 8, "grand_total" => 0])
                ->addData('customer_id', $customerId)
                ->save();
            Mage::getSingleton("core/session")->set("quote_id", $quote->getId());
            $quoteId = $quote->getId();
            $this->load($quoteId);
        }
        return $this;
    }
    protected function _beforeSave()
    {
        $grandTotal = 0;
        foreach ($this->getItemCollection()->getData() as $_item) {
            $grandTotal += $_item->getRowTotal();
        }
        if ($this->getTaxPercent()) {
            $tax = round($grandTotal / $this->getTaxPercent(), 2);
            $grandTotal = $grandTotal + $tax;
        }
        $this->addData('grand_total', $grandTotal);
    }
    public function getItemCollection()
    {
        // $this->initQuote();
        // print_r($this->getId());
        // if ($this->getId())
        return Mage::getModel('sales/quote_item')->getCollection()
            ->addFieldToFilter('quote_id', $this->getId());
    }
    public function getQuoteCustomer()
    {
        $this->initQuote();
        if ($this->getId()) {
            // return Mage::getModel('sales/quote_customer')->getCollection()
            //     ->addFieldToFilter('quote_id', $this->getId());
            return Mage::getModel('sales/quote_customer')->load($this->getId());
        }
    }
    public function getPaymentData()
    {
        $this->initQuote();
        if ($this->getId()) {
            // return Mage::getModel('sales/quote_payment')->getCollection()
            //     ->addFieldToFilter('quote_id', $this->getId());
            return Mage::getModel('sales/quote_payment')->load($this->getId());
        }
    }
    public function getShippingData()
    {
        $this->initQuote();
        if ($this->getId()) {
            // print_r($this->getId());

            // return Mage::getModel('sales/quote_shipping')->getCollection()
            //     ->addFieldToFilter('quote_id', $this->getId());
            return Mage::getModel('sales/quote_shipping')->load($this->getId());
        }
    }
    public function addProduct($request)
    {
        $this->initQuote();
        if ($this->getId()) {
            Mage::getModel("sales/quote_item")->addItem($this, $request['product_id'], $request['qty']);
        }
        $this->save();
    }

    public function removeProduct($request)
    {
        $this->initQuote();
        if ($this->getId()) {
            Mage::getModel("sales/quote_item")->removeItem($this, $request['item_id']);
        }
        $this->save();
    }
    public function updateProduct($request)
    {
        $this->initQuote();
        if ($this->getId()) {
            Mage::getModel("sales/quote_item")->updateItem($this, $request['item_id'], $request['product_id'], $request['qty']);
        }
        $this->save();
    }
    public function addAddress($request)
    {
        $this->initQuote();
        if ($this->getId()) {
            Mage::getModel("sales/quote_customer")->addCustomerAddress($this, $request);
        }
        $this->save();
    }
    public function addPayment($request)
    {
        $this->initQuote();
        if ($this->getId()) {
            $paymentId = Mage::getModel("sales/quote_payment")->addPaymentMethod($this, $request)->getId();
            $this->addData('payment_id', $paymentId);
        }
        $this->save();
    }
    public function addShipping($request)
    {
        $this->initQuote();
        if ($this->getId()) {
            $shippingId = Mage::getModel("sales/quote_shipping")->addShippingMethod($this, $request)->getId();
            $this->addData('shipping_id', $shippingId);
        }
        $this->save();
    }
    public function addPaymentShippingId($salesOrderPayment, $salesOrderShipping)
    {
        Mage::getSingleton('sales/order')->getData();
        Mage::getSingleton('sales/order')->addData('payment_id', $salesOrderPayment)
            ->addData('shipping_id', $salesOrderShipping)->save();
    }

    public function convert()
    {
        // echo "<pre>";
        $this->initQuote();
        if ($this->getId()) {
            $salesOrder = $this->quoteToOrder();
            $salesOrderItem = $this->quoteItemToOrderItem($salesOrder->getId());
            $salesOrderCustomer = $this->quoteCustomerToOrderCustomer($salesOrder->getId());
            $salesOrderPayment = $this->quotePaymentToOrderPayment($salesOrder->getId());
            $salesOrderShipping = $this->quoteShippingToOrderShipping($salesOrder->getId());
            $this->addPaymentShippingId($salesOrderPayment, $salesOrderShipping);
            $this->addData('order_id', $salesOrder->getId())->save();
        }
    }
    public function quoteToOrder()
    {
        if ($this->getId()) {
            $customerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
            return Mage::getSingleton('sales/order')
                ->setData($this->getData())
                ->removeData('quote_id')
                ->removeData('order_id')
                ->removeData('payment_id')
                ->removeData('shipping_id')
                ->removeData('customer_id')
                ->addData('customer_id', $customerId)
                ->save();
        }
    }
    public function quoteItemToOrderItem($orderId)
    {
        if ($this->getId()) {
            foreach ($this->getItemCollection()->getData() as $_item) {
                $salesOrderItemData = Mage::getModel('catalog/product')->load($_item->getProductId());
                return Mage::getModel('sales/order_item')
                    ->setData($_item->getData())
                    ->removeData('quote_id')
                    ->removeData('item_id')
                    ->addData('product_name', $salesOrderItemData->getName())
                    ->addData('product_color', $salesOrderItemData->getColor())
                    ->addData('order_id', $orderId)
                    ->save();
            }
        }
    }
    public function quoteCustomerToOrderCustomer($orderId)
    {
        if ($this->getId()) {
            $data = $this->getQuoteCustomer()->getData();
            if (!empty ($data)) {
                return Mage::getModel('sales/order_customer')
                    ->setData($data)
                    ->removeData('quote_customer_id')
                    ->removeData('quote_id')
                    ->addData('order_id', $orderId)
                    ->save();
            }
        }
    }
    public function quotePaymentToOrderPayment($orderId)
    {
        if ($this->getId()) {
            $salesOrderPaymentData = $this->getPaymentData()->getData();
            if (!empty ($salesOrderPaymentData)) {
                // print_r($salesOrderPaymentData);
                // die;
                Mage::getModel('sales/order_payment')
                    ->setData($salesOrderPaymentData)
                    ->removeData('payment_id')
                    ->removeData('quote_id')
                    ->addData('order_id', $orderId)
                    ->save();
                return $this->getId();
            }
        }
    }
    public function quoteShippingToOrderShipping($orderId)
    {
        if ($this->getId()) {
            $salesOrderShippingData = $this->getShippingData()->getData();
            if (!empty ($salesOrderShippingData)) {
                // print_r($salesOrderShippingData);
                // die;

                Mage::getModel('sales/order_shipping')
                    ->setData($salesOrderShippingData)
                    ->removeData('shipping_id')
                    ->removeData('quote_id')
                    ->addData('order_id', $orderId)
                    ->save();
                return $this->getId();
            }
        }
    }
}