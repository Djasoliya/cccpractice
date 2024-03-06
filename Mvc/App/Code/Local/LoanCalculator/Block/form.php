<?php
class LoanCalculator_Block_Form extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('loanCalculator/form.phtml');
    }
    public function getRateList()
    {
        // $a = Mage::getModel("loancalculator/rate")->getCollection();
        // print_r($a);
        return Mage::getModel("loancalculator/rate")->getCollection();
    }
}