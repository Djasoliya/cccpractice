<?php
class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function IndexAction()
    {
        $layout = $this->getLayout()->toHtml();
        print_r($layout);
        die;
        // echo dirname(__FILE__);
    }
}
?>