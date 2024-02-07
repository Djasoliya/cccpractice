<?php
class Data_Object {
    protected $_data=[];
    public function __construct($temp)
    {
        $this->_data=$temp;
    }
    public function __call($name, $arguments)
    {
        $name= substr($name,3);
        return $this->_data[$name];
    }
}
?>