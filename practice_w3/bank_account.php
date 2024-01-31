<?php
class bankaccount{
    public $accountnumber;
    public $accountholder;
    public $balance;
    public function __construct($accountnumber, $accountholder, $balance){
        $this->accountnumber = $accountnumber;
        $this->accountholder = $accountholder;
        $this->balance = $balance;
    }
    public function deposite($amount){
        $this->balance += $amount;
    }
    public function withdraw($amount){
        if($amount>=$this->balance){
            echo "Insufficient money for withdrawal <br>";
        }
        else{
            $this->balance -= $amount;
        }
    }
    public function displayInfo(){
        echo "Accountnumber : $this->accountnumber <br> Acoountholder : $this->accountholder <br> Balance : $this->balance";
    }
}
$account1 = new bankaccount("9979327", "DJ", "20000");
$account1->deposite(1000);
$account1->withdraw(2000);
$account1->displayInfo();
?>