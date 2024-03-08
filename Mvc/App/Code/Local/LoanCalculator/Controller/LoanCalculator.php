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

        $loanData = Mage::getSingleton('loancalculator/loancalculator')->set('load_id', $data['id']);
        $loanData = Mage::getModel('loancalculator/loancalculator')->setData($data);
        $loanData->save();
        $this->setRedirect('loancalculator/loancalculator/list');
    }
    public function listAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $productList = $layout->createBlock('loancalculator/list');
        $child->addChild('list', $productList);
        $layout->toHtml();
    }
}