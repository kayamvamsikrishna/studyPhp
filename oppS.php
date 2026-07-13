<?php
class v{
    public static $name='Master';//class properties
    public static $age=20;//class property
    //constructor:
    public function __construct(string $name,int $age){
    $this->pn=$name;//object property  
    $this->an=$age;//object properties
    }
    //Static method: i mean it doesn't take this or self
    public static function staticMethod(){
        return " lanka ";
    }
    //Object method:
    public function objMethod() {
        echo "Hey,{$this->pn} your age is " . $this->an;
        $k=$this->staticMethod();
        echo $k . "<br>";
        //"$this" means current object instance  
    }
    //class method:
    public static function clsMethod(){
        echo "Hey,". self::$name . " your age is " . self::$age;
        $m=self::staticMethod();
        echo $m . "<br>";
        }

}
$vsolutions=new v("Mouni",25);
//to call pbject method
$vsolutions->objMethod();
//to call class method
v::clsMethod();
?>