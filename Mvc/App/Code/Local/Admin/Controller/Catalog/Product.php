<?php
class Admin_Controller_Catalog_Product extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $layout->getChild('head')->addCss('product/form.css');

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
        $location = Mage::getBaseUrl('Admin/Catalog_Product/list');
        header("location: $location");
    }
    public function deleteAction()
    {
        // echo "<pre>";
        $id = $this->getRequest()->getParams('id');
        // print_r($id);
        $product = Mage::getModel('catalog/product')
            ->load($id);
        $product->delete();
        $location = Mage::getBaseUrl('Admin/Catalog_Product/list');
        header("location: $location");
    }
    public function listAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('product/list.css');
        $child = $layout->getChild('content');
        $productList = $layout->createBlock('catalog/admin_product_list');
        $child->addChild('list', $productList);
        $layout->toHtml();
    }
}