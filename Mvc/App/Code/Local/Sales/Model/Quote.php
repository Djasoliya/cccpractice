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
            $quote = Mage::getModel("sales/quote")
                ->setData(["tax_percent" => 8, "grand_total" => 0])
                ->save();
            Mage::getSingleton("core/session")->set("quote_id", $quote->getId());
            $quoteId = $quote->getId();
            $this->load($quoteId);
        }
        return $this;
    }
    public function getItemCollection()
    {
        return Mage::getModel('sales/quote_item')->getCollection()
            ->addFieldToFilter('quote_id', $this->getId());
    }
    public function getQuoteCustomer()
    {
        return Mage::getModel('sales/quote_customer')->getCollection()
            ->addFieldToFilter('quote_id', $this->getId());
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
        // print_r($this);
        $this->save();
        // return $this;
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

    public function convert()
    {
        echo "<pre>";
        $this->initQuote();
        if ($this->getId()) {
            $order = Mage::getModel('sales/order')
                ->setData($this->getData())
                ->removeData('quote_id')
                ->removeData('payment_id')
                ->removeData('shipping_id')
                ->save();
            foreach ($this->getItemCollection()->getData() as $_item) {
                $data = Mage::getModel('catalog/product')->load($_item->getProductId());
                Mage::getModel('sales/order_item')
                    ->setData($_item->getData())
                    ->removeData('quote_id')
                    ->removeData('item_id')
                    ->addData('product_name', $data->getName())
                    ->addData('product_color', $data->getColor())
                    ->addData('order_id', $order->getId())
                    ->save();
            }
            $id = $order->getId();
            $this->addData('order_id', $id);
            $this->save();

            foreach ($this->getQuoteCustomer()->getData() as $value) {
                $id = $order->getId();
                // die;    
                $abc = Mage::getModel('sales/order_customer')
                    ->setData($value->getData())
                    ->removeData('quote_customer_id')
                ->removeData('quote_id')
                ->addData('order_id', $id)
                ->save();
            }
        }
    }
}