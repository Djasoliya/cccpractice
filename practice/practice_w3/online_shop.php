<?php
class product{
    public $productId;
    public $productName;
    public $productPrice;
    public function __construct($productId, $productName, $productPrice) {
        $this->productId = $productId;
        $this->productName = $productName;
        $this->productPrice = $productPrice;
    }
    public function getPrice() {
        return $this->productPrice;
    }
    public function getInfo() {
        echo "Product_id : $this->productId <br> Product_name : $this->productName <br> Product_price : $this->productPrice <br><br>";
    }
}
class shopingCart{
    private $items = [];
    public function addItem(product $product){
        $this->items[] = $product;
    }
    public function totalPrice(){
        $total = 0;
        foreach($this->items as $item){
            $total += $item->getPrice();
        }
        return $total;
    }
    public function displayItem(){
        foreach($this->items as $item){
            $item->getInfo();
        }
    }
}
$product1 = new product(1,"car",6000);
$product2 = new product(2,"bike",2000);

$cart = new shopingCart();
$cart->addItem($product1);
$cart->addItem($product2);

$cart->displayItem();
echo "Total price : ".$cart->totalPrice();
?>