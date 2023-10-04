<?php
class Person {
    // attributes
    public $name;
    public $age;
    
    // constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    // method
    public function introduce() {
        echo "My name is " . $this->name . ", I am " . $this->age . " years old.";
    }
}

class Student extends Person {
    // additional attribute
    public $mark;
    
    // constructor
    public function __construct($name, $age, $mark) {
        parent::__construct($name, $age);
        $this->mark = $mark;
    }
    
    // method override
    public function introduce() {
        echo "My name is " . $this->name . ", I am " . $this->age . " years old.\n";
    }
    
    // additional method
    public function calculate_grade_percentage() {
        return round(($this->mark / 100) * 100, 2) . "%";
    }
}

$student = new Student("Alice", 18, "85");
$student->introduce();
$gradePercentage = $student->calculate_grade_percentage();
echo "My grade percentage is {$gradePercentage}\n";