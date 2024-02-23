<?php
class Admin_Controller_Catalog_Category extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');   
        $layout->getChild('head')->addCss('Product/Form.css');

        $productForm = $layout->createBlock('catalog/admin_category_form');
        $child->addChild('form', $productForm);

        $layout->toHtml();
    }
    // public function saveAction()
    // {
    //     $data = $this->getRequest()->getParams('catalog_category');
    //     $product = Mage::getModel('catalog/category')
    //         ->setData($data);
    //     $product->save();
    //     // print_r($product);
    // }


    public function saveAction()
{
    $data = $this->getRequest()->getParams('catalog_category');
    $product = Mage::getModel('catalog/category')->setData($data);
    $product->save();
    // print_r($product);
}

    public function deleteAction()
    {
        // echo "<pre>";
        $id = $this->getRequest()->getParams('id');
        // print_r($id);
        $product = Mage::getModel('catalog/category');
        $product->delete($id);
        print_r($product);
    }
}