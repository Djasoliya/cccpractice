<?php
class SeasonFruits_Block_Season extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('seasonFruits/season.phtml');
    }
    public function getSeasons()
    {
        return Mage::getModel('SeasonFruits/season')->getCollection();
    }
    public function getFruits()
    {
        return Mage::getModel('SeasonFruits/fruits')->getCollection()->addFieldToFilter('season_id', $this->getId());
        // addFieldToFilter('season_id', ['like' => 'G%']  );
    }
    public function getId()
    {
        return $this->getRequest()->getParams('id');
        // return Mage::getModel('SeasonFruits/fruits')->getCollection()->addFieldToTilter('season_id', $id );
    }
}