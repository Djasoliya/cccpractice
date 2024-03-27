<?php
class SeasonFruits_Model_Fruits extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'SeasonFruits_Model_Resource_Fruits';
        $this->_collectionClass = 'SeasonFruits_Model_Resource_Collection_Fruits';
        $this->_modelClass = 'SeasonFruits/fruits';
    }
}