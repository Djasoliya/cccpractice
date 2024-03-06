<?php
class LoanCalculator_Controller_LoanCalculator extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $loanForm = $layout->createBlock('loancalculator/form');
        $child->addChild('form', $loanForm);
        $layout->toHtml();
    }
    public function saveAction()
    {
        $data = $this->getRequest()->getParams('loan');
        print_r($data);
        // $result = (loan_amount*rate*monthly_amount(1+rate)**term)/((1+rate)**term-1);
        $loanData = Mage::getModel('loancalculator/loancalculator')->setData($data);
        $loanData->save();
    }
    public function listAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $productList = $layout->createBlock('loancalculator/loancalculator');
        $child->addChild('list', $productList);
        $layout->toHtml();
    }
}