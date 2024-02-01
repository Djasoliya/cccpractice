<pre>
<?php
// phpinfo();
class A
{
    public $a = 10;
    public function test()
    {
        echo $this->a;
        $this->a++;
        echo $this->a. " in the test()<br>";
        return $this;
    }
    public function test2()
    {
        if (!isset($this->obj)) {
            $this->obj = new A();
        }
        $this->obj->test()->test();
        print_r($this->obj);
        echo " in the class a test2() <br>";
        $this->a = $this->obj->a;
        echo  $this->a." in the class a test2() after   asdfs <br>";
        return $this;
    }
}
class B
{
    public function test2()
    {
        if (!isset($this->obj)) {
            $this->obj = new A();
        }
        $this->obj->test2()->test2();
        echo $this->obj->a." in the class b test2()<br>";
        $this->obj->test();
        echo $this->obj->a." in the class b test2() after the test<br>";
        // echo get_class($this);
        // echo get_class($this->obj);
        $this->a = $this->obj->a;
        echo $this->a." in the class b test2() after the gkudgnosye<br>";
        return $this;
    }
}

$obj = new B();

$obj->test2();
echo "calling first time";
print_r($obj->a);
echo "<br>";
$obj->test2();
print_r($obj->a);
// print_r($obj->test2());

// $obj2 = new B(.
?>