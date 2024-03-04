<?php
class Sales_Model_Quote extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Quote_Model_Resource_Quote';
        $this->_collectionClass = 'Quote_Model_Resource_Collection_Quote';
        $this->_modelClass = 'sales/quote';
    }
}