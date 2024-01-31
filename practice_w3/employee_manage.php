<?php
class employee{
    public $name;
    public $position;
    public $salary;
    public function calculateBonus($bonus){
        $a = $bonus/100;
        return $this->salary*$a;
    }
}
$employee = new employee();
$employee->name = "DJ";
$employee->position = "Intern";
$employee->salary = "30000";
$bonusPercentage = 10;
echo "Employee bonus is : ".$employee->calculateBonus($bonusPercentage);
?>