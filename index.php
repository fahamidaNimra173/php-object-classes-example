<?php
echo "hello world \n";
echo"<br>";
class calculation{
    public $a,$b,$c;
    public function sum(){
        $this->c=$this->a + $this->b;
        return $this->c;
    }
    public function sub(){
        $this->c=$this->a-$this->b;
        return $this->c;
    }

}
$c1= new calculation();
$c1->a=20;
$c1->b=10;

$c2= new calculation();
$c2->a=30;
$c2->b=10;

$c1->sum();
$c2->sub();
echo "the value of summation : ".$c1->sum()."\n";
echo"<br>";

echo "the value of substraction : ".$c2->sub()."\n";
echo"<br>";

echo "the value of substraction c1 : ".$c1->sub()."\n";