<?php
class LoanCalculator_Model_LoanCalculator extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'LoanCalculator_Model_Resource_LoanCalculator';
        $this->_collectionClass = 'LoanCalculator_Model_Resource_Collection_LoanCalculator';
        $this->_modelClass = 'loancalculator/loancalculator';
    }

    public function _beforeSave()
    {
        $bankCode = $this->getBankCode();
        $r = Mage::getBlock('loancalculator/form')->getBankRate($bankCode) / 12;
        $p = $this->getLoanAmount();
        $n = $this->getTerm();

        $result = ($p * ($r) * pow(($r + 1), $n)) / (pow($r + 1, $n - 1));
        $this->addData('result', $result);
    }
}