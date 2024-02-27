<?php
class Admin_Controller_Catalog_Category extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $layout->getChild('head')->addCss('category/form.css');

        $productForm = $layout->createBlock('catalog/admin_category_form');
        $child->addChild('form', $productForm);

        $layout->toHtml();
    }
    public function saveAction()
    {
        $data = $this->getRequest()->getParams('catalog_category');
        $product = Mage::getModel('catalog/category')->setData($data);
        $product->save();
        $location = Mage::getBaseUrl('Admin/Catalog_Category/list');
        header("location: $location");
        // print_r($product);
    }
    public function deleteAction()
    {
        // echo "<pre>";
        $id = $this->getRequest()->getParams('id');
        // print_r($id);
        $product = Mage::getModel('catalog/category')
            ->load($id);
        $product->delete();
        $location = Mage::getBaseUrl('Admin/Catalog_Category/list');
        header("location: $location");
    }
    public function listAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('category/list.css');
        $child = $layout->getChild('content');
        $productList = $layout->createBlock('catalog/admin_category_list');
        $child->addChild('list', $productList);
        $layout->toHtml();
    }
}