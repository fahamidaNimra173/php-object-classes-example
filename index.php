<?php
echo "hello world \n";
echo"<br>";

// explanation of class .
//--A class is a set of instructions that defines what an object can have and what it can do.
//It does not store actual data.
//We use the same class in multiple places to create objects, and we pass values to those objects when we create or use them.

class calculation{
    public $a,$b,$c;// this are the properties.
    public function sum(){// this is the method which tells the object what to do
        $this->c=$this->a + $this->b;
        return $this->c;
    }
    public function sub(){// this is the method which tells the object what to do
        $this->c=$this->a-$this->b;
        return $this->c;
    }

}
$c1= new calculation();//this is an object and by this by this we are alocating storage to that object so it can store values
$c1->a=20;//assigning values
$c1->b=10;//asigning values

$c2= new calculation();// by this we are alocating storage to that object so it can store values
$c2->a=30;//assigning values 
$c2->b=10;//assigning values

$c1->sum();//calling that funtion so that we can get our output by our assigned values
$c2->sub();
echo "the value of summation : ".$c1->sum()."\n";// showing the results
echo"<br>";

echo "the value of substraction : ".$c2->sub()."\n";// showing the results
echo"<br>";

echo "the value of substraction c1 : ".$c1->sub()."\n";// showing the results

//  the above example is okey but there is a issue. like if we have multiple values to assign the we have to call and asign the funcition multiple time which makes the code lengthy and messy.
//  to solve the problem we use a function __constract which alows us to take multiple values at the same time
 
class calculationNew{
    public $a,$b,$c;
    function __construct($a=0,$b=0){
        $this->a=$a;
        $this->b=$b;
        
    }
    function sum(){
       $this->c=$this->a+$this->b;
       return $this->c; 
    }
    
}
$k=new calculationNew(10,15);
$k1=new calculationNew(30,15);
echo"<br>";
echo "the value of summation : ".$k->sum()."\n";// showing the results
echo"<br>";
echo "the value of summation : ".$k1->sum()."\n";// showing the results