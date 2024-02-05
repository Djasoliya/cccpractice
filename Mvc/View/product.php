<?php
class View_Product{
    // public $row;
    public $row=[];
    public function __construct(){
        
    }
    // public function dataUpdate($condition){
    //     $product = new Model_Product();
    //     $data = $product->selectData($condition);
    //     global $row;
    //     $row = $product->getQueryBuilder()->fetchAssoc($data);
    //     print_r($row);
    // }
    public function createForm(){
        if(array_key_exists('product_name',$this->row)){
            $this->row=$this->row;
        }
        else{
            $this->row['product_name']='';
            $this->row['sku']='';
            $this->row['product_type']='';
            $this->row['category']='';
            $this->row['manufacturer_cost']='';
            $this->row['shipping_cost']='';
            $this->row['total_cost']='';
            $this->row['price']='';
            $this->row['status']='';
            $this->row['created_at']='';
            $this->row['updated_at']='';
        }
        $form = '<form action="" method = "POST" >';
            $form .= '<div>';
                $form .= $this->createTextField('group[product_name]','Product name : ',$this->row['product_name']);
            $form .= '</div>';

            $form .= '<div>';
                $form .= $this->createTextField('group[sku]','SKU : ',$this->row['sku']);
            $form .= '</div>';

            $form .= '<div>';
            $radioArr = array("Simple"=>"Simple","Bundle"=>"Bundle");
                $form .= $this->createRadioBtn('group[product_type]','Product type : ',$radioArr,$this->row['product_type']);
            $form .= '</div>';

            $form .= '<div>';
            $optionArr = array("Bar & Game Room"=>"Bar & Game Room", "Bedroom"=>"Bedroom","Decor"=>"Decor","Dining & Kitchen"=>"Dining & Kitchen","Lighting"=>"Lighting","Living Room"=>"Living Room",	
            "Mattreses"=>"Mattreses","Office"=>"Office","Outdoor"=>"Outdoor");
                $form .= $this->createDropDown('group[category]','Category : ',$optionArr,$this->row['category']);
            $form .= '</div>';

            $form .= '<div>';
            $form .= $this->createTextField('group[manufacturer_cost]','Manufacturer Cost : ',$this->row['manufacturer_cost']);
            $form .= '</div>';

            $form .= '<div>';
            $form .= $this->createTextField('group[shipping_cost]','Shipping Cost : ',$this->row['shipping_cost']);
            $form .= '</div>';

            $form .= '<div>';
                $form .= $this->createTextField('group[total_cost]','Total Cost : ',$this->row['total_cost']);
            $form .= '</div>';

            $form .= '<div>';
                $form .= $this->createTextField('group[price]','Price : ',$this->row['price']);
            $form .= '</div>';

            $form .= '<div>';
            $statusArr = array("Enabled"=>"Enabled", "Disabled"=>"Disabled");
                $form .= $this->createDropDown('group[status]','Status : ',$statusArr,$this->row['status']);
            $form .= '</div>';

            $form .= '<div>';
                $form .= $this->createDate('group[created_at]','Created At : ',$this->row['created_at']);
            $form .= '</div>';

            $form .= '<div>';
                $form .= $this->createDate('group[updated_at]','Updated At : ',$this->row['updated_at']);
            $form .= '</div>';

            $form .= '<div>';
                $form .= $this->createSubmitBtn('Submit');
            $form .= '</div>';
            
        return $form;
    }
    
    public function createTextField($name,$title,$value='',$id=''){
        return '<span>'.$title.'</span><input type="text" name="'. $name . '" value = "'.$value.'" id="'.$id. '"/>';
    }
    
    public function createDropDown($name,$title,$option=[],$selectedValue = '',$id=''){
        $dropDown = '<span>'.$title.'</span>';
        $dropDown .= '<select name="'.$name.'" id= "'.$id.'">';
        foreach($option as $key => $val){
            $selected = ($selectedValue == $val) ? 'selected' : '';
            $dropDown .= '<option value="' . $val . '" ' . $selected . '>' . $key . '</option>';
        }
        $dropDown .= '</select>';
        return $dropDown;
    }
    
    public function createRadioBtn($name,$title,$optionArr=[],$checkedValue='',$id=''){
        $radioBtn = '<span>'.$title.'</span>';
        foreach ($optionArr as $key => $label) {
            $checked = ($checkedValue == $key) ? 'checked' : '';
            $radioBtn .= '<input type="radio" name="'.$name.'" value="'.$key.'" id="'.$id.'" '.$checked.'/>'.$label;
        }
        return $radioBtn;
    }
    
    public function createDate($name,$title,$value=''){
        $date = '<span>'.$title.'</span><input type="date" name="'.$name.'" value ="'.$value.'">';
        return $date;
    }
    
    public function createSubmitBtn($title){
        return '<input type="submit" name="submit" value="'.$title.'">';
    }
    
    public function toHtml(){
        return $this->createForm();
    }
    public function setData($result){
        $row=mysqli_fetch_assoc($result);
        $this->row=$row;
        return $this->row;
    }
    
}
?>