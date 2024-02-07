<?php
class Data_collection_object{
    protected $_data=[];
    public function addData($temp)
    {
        foreach($temp as $_temp){
            $this->_data[]=new Data_Object($_temp);
        }
    }
    public function getData(){
        return $this->_data;
    }
    
}
?>