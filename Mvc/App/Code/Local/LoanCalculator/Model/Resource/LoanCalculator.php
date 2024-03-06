<?php
class LoanCalculator_Model_Resource_LoanCalculator extends Core_Model_Resource_Abstract
{
    protected $_primarykey = '';
    protected $_tablename = '';
    public function __construct()
    {
        $this->init('ccc_loan_calculator', 'id');
    }
    public function init($tableName, $primaryKey)
    {
        $this->_tableName = $tableName;
        $this->_primaryKey = $primaryKey;
    }
}