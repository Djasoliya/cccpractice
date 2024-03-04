<?php
class Catalog_Block_Admin_Product_List extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('catalog/admin/product/list.phtml');
    }
    public function getProduct()
    {
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