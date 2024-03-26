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
   
}