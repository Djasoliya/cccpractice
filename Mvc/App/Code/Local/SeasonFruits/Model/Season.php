<?php
class SeasonFruits_Model_Season extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'SeasonFruits_Model_Resource_Season';
        $this->_collectionClass = 'SeasonFruits_Model_Resource_Collection_Season';
        $this->_modelClass = 'SeasonFruits/season';
    }
}