<?php
class Admin_Controller_Catalog_Product extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $layout->getChild('head')->addCss('Product/Form.css');

        $productForm = $layout->createBlock('catalog/admin_product_form');
        $child->addChild('form', $productForm);

        $layout->toHtml();
    }
    public function saveAction()
    {
        $data = $this->getRequest()->getParams('catalog_product');
        $product = Mage::getModel('catalog/product')
            ->setData($data);
        $product->save();
    }
    public function deleteAction()
    {
        // echo "<pre>";
        $id = $this->getRequest()->getParams('id');
        // print_r($id);
        $product = Mage::getModel('catalog/product')
            ->load($id);
        $product->delete();
    }
    public function listAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $productForm = $layout->createBlock('catalog/admin_product_list');
        $child->addChild('list', $productForm);
        $layout->toHtml();
    }
}