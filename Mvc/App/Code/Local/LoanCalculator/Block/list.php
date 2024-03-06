<?php
class LoanCalculator_Block_List extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('loanCalculator/list.phtml');
    }
    public function getList()
    {
        return Mage::getModel("loancalculator/loancalculator")->getCollection();
    }
}