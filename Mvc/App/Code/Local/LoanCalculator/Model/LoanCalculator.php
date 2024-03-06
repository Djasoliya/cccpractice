<?php
class LoanCalculator_Model_LoanCalculator extends Core_Model_Abstract
{
    public function init(){
        $this->_resourceClass = 'LoanCalculator_Model_Resource_LoanCalculator';
        $this->_collectionClass = 'LoanCalculator_Model_Resource_Collection_LoanCalculator';
    }
}