<?php
class View_Product{
    public function createForm(){
        $form = '<form action="" method = "POST" >';
            $form .= '<div>';
                $form .= $this->createTextField('group[product_name]','Product name : ');
            $form .= '</div>';

            $form .= '<div>';
                $form .= $this->createTextField('group[sku]','SKU : ');
            $form .= '</div>';

            $form .= '<div>';
            $radioArr = array("simple"=>"Simple","bundle"=>"Bundle");
                $form .= $this->createRadioBtn('group[product_type]','Product type : ',$radioArr);
            $form .= '</div>';

            $form .= '<div>';
            $optionArr = array("Bar & Game Room"=>"Bar & Game Room", "Bedroom"=>"Bedroom","Decor"=>"Decor","Dining & Kitchen"=>"Dining & Kitchen","Lighting"=>"Lighting","Living Room"=>"Living Room",	
            "Mattreses"=>"Mattreses","Office"=>"Office","Outdoor"=>"Outdoor");
                $form .= $this->createDropDown('group[category]','Category : ',$optionArr);
            $form .= '</div>';

            $form .= '<div>';
            $form .= $this->createTextField('group[manufacturer_cost]','Manufacturer Cost : ');
            $form .= '</div>';

            $form .= '<div>';
            $form .= $this->createTextField('group[shipping_cost]','Shipping Cost : ');
            $form .= '</div>';

            $form .= '<div>';
                $form .= $this->createTextField('group[total_cost]','Total Cost : ');
            $form .= '</div>';

            $form .= '<div>';
                $form .= $this->createTextField('group[price]','Price : ');
            $form .= '</div>';

            $form .= '<div>';
            $statusArr = array("Enabled"=>"Enabled", "Disabled"=>"Disabled");
                $form .= $this->createDropDown('group[status]','Status : ',$statusArr);
            $form .= '</div>';

            $form .= '<div>';
                $form .= $this->createDate('group[created_at]','Created At : ');
            $form .= '</div>';

            $form .= '<div>';
                $form .= $this->createDate('group[updated_at]','Updated At : ');
            $form .= '</div>';

            $form .= '<div>';
                $form .= $this->createSubmitBtn('Submit');
            $form .= '</div>';
            
        return $form;
    }
    public function createTextField($name,$title,$value='',$id=''){
        return '<span>'.$title.'</span><input type="text" name="'. $name . '" value = "'.$value.'" id="'.$id. '"/>';
    }
    public function createDropDown($name,$title,$option=[],$id=''){
        $dropDown = '<span>'.$title.'</span>';
        $dropDown .= '<select name="'.$name.'" id= "'.$id.'">';
        foreach($option as $key => $val){
            $dropDown .= '<option value="'.$val.'">'.$key.'</option>'; 
        }
        $dropDown .= '</select>';
        return $dropDown;
    }
    public function createRadioBtn($name,$title,$value=[],$id=''){
        $radioBtn = '<span>'.$title.'</span>';
        foreach ($value as $key => $lable) {
            $radioBtn .= '<input type="radio" name="'. $name . '" value = "'.$key.'" id="'.$id. '"/>'.$lable;
        }
        return $radioBtn;
    }
    public function createDate($name,$title){
        $date = '<span>'.$title.'</span><input type="date" name="'.$name.'">';
        return $date;
    }
    public function createSubmitBtn($title){
        return '<input type="submit" name="submit" value="'.$title.'">';
    }
    public function toHtml(){
        return $this->createForm();
    }
}
?>