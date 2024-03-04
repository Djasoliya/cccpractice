<?php 
class Admin_Controller_Index extends Core_Controller_Admin_Action{
    public function indexAction() {
        $layout = $this->getLayout();
        $banner  = $layout->createBlock("core/template")
                    ->setTemplate("admin/admindashbord.phtml");
        $layout->getChild("content")
                    ->addChild('banner',$banner);
        $layout->toHtml();
    }
}

?>