<?php
// class student{
//     private $name;
//     private $number;
//     public function __construct($name,$number){
//         $this->name = $name;
//         $this->number = $number;
//         echo "name of student is $name and en.no is $number";
//     }
// }
// $namestudent = new student("dj", "1032");
// $name1student = new student("dhruv", "1032");

// it’s called when the object is destroyed
// provide an opportunity to save the object state or any other cleanups you would want to perform.
// class student{
//     private $name;
//         private $number;
//         public function __construct($name,$number){
//             $this->name = $name;
//             $this->number = $number;
//             echo "name of student is $name and en.no is $number";
//         }
//         public function __distruct($name,$number){
//             echo "calling distruct for $this->name";
//         }
// }
// $namestudent = new student("dj", "1032");
// $name1student = new student("dhruv", "1032");

//it use for if you are trying to access not existing properties than __set first argument take phone and second its value
//__set() is run when writing data to inaccessible (protected or private) or non-existing properties.
//class Student {
    //     private $data = array();
    //     public function __set($name, $value) 
    //     {
    //         $this->data[$name] = $value;
    //         echo $name." ".$value;
    //     }
    // }
    // $objStudent = new Student();
    // // __set() called 
    // $objStudent->phone = '0491 570 156';
        
// __get() is utilized for reading data from inaccessible (protected or private) or non-existing properties. 
// class Student {
//     private $data = array();
//     public function __get($name) 
//     {
//         if(isset($this->data[$name])) {
//             return $this->data[$name];
//         }
//     }
// }
// $objStudent = new Student();
// $objStudent->phone = '0491 570 156';   
// // __get() called 
// // Output: 0491 570 156 
// echo $objStudent->phone;  

//it use when you try to access inaccessible method it first argument take the that inaccessible method name in second argument give the array of the that methods argument
// class Student {
//     public function __call($methodName, $arguments) 
//     {
//         echo "method name : $methodName ";
//         print_r($arguments);
//     }
// }
// $objStudent = new Student();
// $objStudent->getStudentDetails("dj","hello");

// __callStatic() is a method that is automatically called when you try to call an inaccessible method in a static context
// class ExampleClass {
//     public static function __callStatic($name, $arguments) {
//         echo "Static method '$name' is not accessible or doesn't exist.";
//         print_r($arguments);
//     }
// }
// ExampleClass::nonExistentStaticMethod("dj","hello"); // This will trigger __callStatic()

// class Student {
//     public $data = array();
//     // public $phone = 10;
//     public function __isset($name) 
//     {
//         return isset($this->data[$name]);
//     }
// }
// $objStudent = new Student();
// $objStudent->data['phone'] = '123-456-7890';
// echo isset($objStudent->phone);

// class Student {
//     public $data = array();

//     public function __isset($name) 
//     {
//         return isset($this->data[$name]);
//     }

//     public function __unset($name) 
//     {
//         unset($this->data[$name]);
//     }
// }

// $objStudent = new Student();
// // Check if 'name' is set
// echo isset($objStudent->name);  // Output: false

// // Unset 'age'
// unset($objStudent->age);

// // Check if 'age' is set
// echo isset($objStudent->age);  // Output: false

// // Check if 'name' is set again
// echo isset($objStudent->name);  // Output: true

//it convert the object into string
// class Student {
//     private $name;
//     private $email;
//     public function __construct($name, $email) 
//     {
//         $this->name = $name;
//         $this->email = $email;
//     }
//     public function __toString()
//     {
//         return 'Student name: '.$this->name
//         . '<br>'
//         . 'Student email: '.$this->email;
//     }
// }
// $objStudent = new Student('John', 'john@tutsplus.com');
// echo $objStudent;

// __invoke() which is called when you try to call an object as if it were a function. 
// class Student {
//     private $name;
//     private $email;
//     public function __construct($name, $email) 
//     {
//         $this->name = $name;
//         $this->email = $email;
//     }
//     public function __invoke()
//     {
//         echo 'Student object is called as a function!';
//     }
// }
// $objStudent = new Student('John', 'john@tutsplus.com');
// $objStudent();

//it is clone the object properties to anothe obeject
// class Student {
//     public $name;
//     public $email;
//     public function __construct($name, $email)
//     {
//         $this->name = $name;
//         $this->email = $email;
//     }
//     public function __clone()
//     {
//         echo "hii";
//     }
// }
// $person1 = new Student("dj", "123@gmail.com");
// $objStudentTwo = clone $person1;
// echo $objStudentTwo->name;

// class Student {
//     public $name;
//     private $email;
//     private $ssn;
//     public function __debugInfo() 
//     {
//         return array('student_name' => $this->name);
//     }
// }
// $objStudent = new Student();
// var_dump($objStudent);

class Student {
    public $name;
    public $email;
    public $phone;
    // private $db_connection_link;
    public function __construct($name, $email, $phone) 
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }
    //convert the object to array
    public function __serialize()
    {
        return ['name' => $this->name, 'email' => $this->email, 'mobile' => $this->phone];
    }
    //convert the array to object
    // public function __wakeup($data)
    // {
    //     $this->name = $data['name'];
    //     $this->email = $data['email'];
    //     $this->phone = $data['mobile'];
        
    //     // $this->db_connection_link = your_db_connection_function();
    // }
}
$stu = new Student("dj", "Student", "hello");
$seri = serialize($stu);
echo $seri;



// class A
// {
//     public $i = 0;
//     public function inc()
//     {
//         $this->i++;
//     }
//     public function reset()
//     {
//         $this->i = 10;
//     }
// }

// $obj1 = new A();
// print_r($obj1);
// $obj1->inc();
// print_r($obj1);
// $obj1->reset();
// $obj1->i = 10;
// echo "<br>";

// $obj2 = new A();
// $obj2->inc();

// print_r($obj1);
// $obj1->inc();
// print_r($obj2);
?>

    
