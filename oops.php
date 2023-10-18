<?php
    class Employee{
        public $name;
        public $salary;

        public function __construct($name1, $salary1){
            $this->name = $name1;
            $this->salary = $salary1;

        }
    }
    $E1 = new Employee("subham",1000);
    echo "The salary of E1 is $E1->salary <br>"

?>