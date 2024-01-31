<?php
//distance of two points in 2D
//[(x1-x2)^2 + (y1-y2)^2]^1/2
class point{
    public $x1,$x2;
    public $y1,$y2;
    public function distance($otherpoint){
        return sqrt(pow($this->x1-$otherpoint->x2,2)+pow($this->y1-$otherpoint->y2,2));
    }

}
$point1 = new point();
$point1->x1=2;
$point1->y1=7;

$point2 = new point();
$point2->x2=5;
$point2->y2=6;

echo "Distance from (x1,y1) to (x2,y2) is : ".$point1->distance($point2);
?>