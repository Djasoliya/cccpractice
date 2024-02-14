<?php
class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function IndexAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/navigation.js');
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addCss('css/navigation.js');
        $layout->getChild('head')->addCss('css/page.js');
        // print_r($layout->getChild('head'));



        $layout->toHtml();
        // print_r($layout);
        // die;
        // echo dirname(__FILE__);
    }
}
?>