<?php
class product{
    private $productId;
    private $productname;
    private $productprice;
    public function __construct($productId, $productname, $productprice) {
        $this->productId = $productId;
        $this->productname = $productname;
        $this->productprice = $productprice;
    }
    public function getPrice() {
        return $this->productprice;
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
            echo "{$item->getPrice()} - {$item->getPrice()} USD <br>";
        }
    }
}
$product1 = new product(1,"car","6000");
$product2 = new product(1,"bike","2000");

$cart = new shopingCart();
$cart->addItem($product1);
$cart->addItem($product2);

$cart->displayItem();
echo "Total price : ".$cart->totalPrice();
?>