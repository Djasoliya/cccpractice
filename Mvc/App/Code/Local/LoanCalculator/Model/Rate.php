<?php
class LoanCalculator_Model_Rate extends Core_Model_Abstract
{
    public function init(){
        $this->_resourceClass = 'LoanCalculator_Model_Resource_Rate';
        $this->_collectionClass = 'LoanCalculator_Model_Resource_Collection_Rate';
    }
}