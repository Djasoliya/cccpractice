<?php
class shape{

}
class circlearea extends shape{
    public $radius;
    public function findArea(){
        //area = pi()*r*r
        return pi()*pow($this->radius,2);
        // return pi()*$this->radius*$this->radius;
    } 
    public function findPerimeter(){
        //area = 2*pi()*r
        return 2*pi()*$this->radius;
    } 
}
class rectanglearea extends shape{
    public $width;
    public $length;
    public function findArea(){
        //area = width*length;
        return $this->length*$this->width;
    } 
    public function findPerimeter(){
        //area = 2*(lenght+width)
        return 2*($this->length+$this->width);
    } 
}
$circle = new circlearea();
$circle->radius = 7;

$rectangle = new rectanglearea();
$rectangle->length = 6;
$rectangle->width = 8;

echo "Circle Area: " . $circle->findArea() . "<br>";
echo "Circle Perimeter: " . $circle->findPerimeter() . "<br>";
echo "Rectangle Area: " . $rectangle->findArea(). "<br>";
echo "Rectangle Perimeter: " . $rectangle->findPerimeter();

?>