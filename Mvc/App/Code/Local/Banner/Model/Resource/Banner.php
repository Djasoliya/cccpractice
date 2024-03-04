<?php
class Banner_Model_Resource_Banner extends Core_Model_Resource_Abstract
{
    protected $_tableName = "";
    protected $_primaryKey = "";
    public function init($tableName, $primaryKey)
    {
        $this->_tableName = $tableName;
        $this->_primaryKey = $primaryKey;
    }

    //Above part is abstract
    public function __construct()
    {
        $this->init('banner', 'banner_id');
    }

}
?>