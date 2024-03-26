<?php
class LoanCalculator_Model_Rate extends Core_Model_Abstract
{
    public function init(){
        $this->_resourceClass = 'LoanCalculator_Model_Resource_Rate';
        $this->_collectionClass = 'LoanCalculator_Model_Resource_Collection_Rate';
        $this->_modelClass = 'loancalculator/rate';
    }
    public function getBankRate($bankCode = null)
    {
        $bankData = Mage::getModel('loancalculator/rate')->getCollection()->getData();
        $bank = [];
        foreach ($bankData as $_bank) {
            $bank[$_bank->getBankCode()] = $_bank->getRate();
        }
        if (!is_null($bankCode)) {
            return $bank[$bankCode];
        } else {
            return 0;
        }
    }
}