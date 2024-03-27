<?php
class SeasonFruits_Controller_SeasonFruits extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $loanForm = $layout->createBlock('SeasonFruits/Season');
        $child->addChild('form', $loanForm);
        $layout->toHtml();
    }
    public function saveAction()
    {
        $id = $this->getRequest()->getParams('id');
        $this->setRedirect('SeasonFruits/SeasonFruits/index?id='.$id);
    }
}