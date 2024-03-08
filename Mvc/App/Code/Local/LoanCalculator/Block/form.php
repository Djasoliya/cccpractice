<?php
class LoanCalculator_Block_Form extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('loanCalculator/form.phtml');
    }
    public function getRateList()
    {
        return Mage::getModel("loancalculator/rate")->getCollection();
    }
    public function getIdSession()
    {
        return Mage::getSingleton("core/session")->getId();
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