<?php
class Catalog_Block_Category_View extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate("catalog/category/view.phtml");
    }
    public function getProductData()
    {
        $id =  $this->getRequest()->getParams("id");
        if($id){
            return Mage::getModel("catalog/product")->getCollection()->addFieldToFilter("category_id",$id);    
        }
        return Mage::getModel("catalog/product")->getCollection();
    }
    public function getCategoryNameById($id)
    {
        $catArr = Mage::getModel('catalog/product')->getCategoryArray();
        if (array_key_exists($id, $catArr)) {
            return $catArr[$id];
        }
        // foreach ($catArr as $key => $value){
        //     if ($id == $key) {
        //         return $value;
        //     }
        //}
    }
}
?>