<?php
class Core_Model_Resource_Abstract
{
    protected $_tableName;
    protected $_primaryKey;
    public function getTableName()
    {
        return $this->_tableName;
    }
    public function load($id, $column = null)
    {
        $sql = "SELECT * FROM {$this->_tableName} WHERE {$this->_primaryKey} = {$id} LIMIT 1";

        return $this->getAdapter()->fetchRow($sql);
    }
    public function getAdapter()
    {
        return Mage::getModel('core/DB_Adapter');
        // return new Core_Model_DB_Adapter();
    }
    public function getPrimaryKey()
    {
        return $this->_primaryKey;
    }
    public function save(Core_Model_Abstract $product)
    {
        $data = $product->getData();
        if (isset($data[$this->_primaryKey]) && !empty($data[$this->_primaryKey])) {
            unset($data[$this->_primaryKey]);
            $sql = $this->updateSql($this->getTableName(), $data, [$this->getPrimaryKey() => $product->getId()]);
            $this->getAdapter()->update($sql);
            echo '<script>alert("Data updated succsefully")</script>';
        } else {
            $sql = $this->insertSql($this->getTableName(), $data);
            $id = $this->getAdapter()->insert($sql);
            $product->setId($id);
            echo '<script>alert("Data inserted succsefully")</script>';
        }
        // $data = $product->getData();
        // if (isset($data[$this->getPrimaryKey()])) {
        //     unset($data[$this->getPrimaryKey()]);
        // }
        // $sql = $this->insertSql($this->getTableName(), $data);
        // $id = $this->getAdapter()->insert($sql);
        // $product->setId($id);
    }
    public function insertSql($tableName, $data)
    {
        $columns = $values = [];
        foreach ($data as $col => $val) {
            $columns[] = "`$col`";
            $values[] = "'" . addslashes($val) . "'";
        }
        $columns = implode(",", $columns);
        $values = implode(",", $values);
        return "INSERT INTO {$tableName} ({$columns}) VALUES ({$values})";
    }

    public function delete(Core_Model_Abstract $product)
    {
        $sql = $this->deleteSql(
            $this->getTableName(),
            [$this->getPrimaryKey() => $product->getId()]
        );
        return $this->getAdapter()->delete($sql);
    }
    public function deleteSql($tableName, $where)
    {
        $wherecond = [];
        foreach ($where as $col => $val) {
            $wherecond[] = "`$col` = '$val'";
        }
        $wherecond = implode("AND", $wherecond);
        return "DELETE FROM {$tableName} WHERE ({$wherecond})";
    }
    public function updateSql($tableName, $cols, $where)
    {
        $columns = $wherecond = [];
        foreach ($cols as $col => $val) {
            $columns[] = "`$col` = '$val'";
        }
        foreach ($where as $col => $val) {
            $wherecond[] = "`$col` = '$val'";
        }
        $columns = implode(",", $columns);
        $wherecond = implode("AND", $wherecond);
        return "UPDATE {$tableName} SET {$columns} WHERE {$wherecond}";
    }
}
?>