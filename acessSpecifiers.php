Public access specifications: //we can access everywhere 
class Student {
    public $name = "Vamsi";

    public function display() {
        echo $this->name;
    }
}

$obj = new Student();
echo $obj->name;   // Allowed


protected access specifiers : //we can access only in child class 
class Student {
    protected $name = "Vamsi";
}

class College extends Student {
    public function display() {
        echo $this->name;  // Allowed
    }
}

$obj = new College();
// echo $obj->name;      // Not allowed



private access specifiers : //we can access only with in the class
class Student {
    private $name = "Vamsi";

    public function display() {
        echo $this->name;  // Allowed
    }
}

$obj = new Student();
// echo $obj->name;      // Not allowed