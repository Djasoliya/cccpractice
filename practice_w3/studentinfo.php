<?php
class student{
    public $name;
    public $age;
    public $grade;
    public function displayinfo(){
        echo "Name : $this->name" ."<br>";
        echo "Age : $this->age" ."<br>";
        echo "Grade : $this->grade" ."<br>";
    }
}
$studentinfo = new student();
$studentinfo->name="Dj";
$studentinfo->age= 21;
$studentinfo->grade="A";
$studentinfo->displayinfo();
?>