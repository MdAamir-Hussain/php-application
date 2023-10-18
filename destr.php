<?php
    class Emplyee{
        //Properties of our class 
        public $name;
        public $salary;

        //constructor
        function __construct($name1, $salary1){
            $this->name = $name1;
            $this->salary = $salary1;

        }
        function __destruct(){
            echo "I am destructing $this->name <br>";
        }
    }

    $rohan = new Emplyee("Rohan", 73000);
    $aamir = new Emplyee("Aamir", 10000);
    $skillf = new Emplyee("Skillf", 56000);

    echo "The salary of aamir is $aamir->salary <br>";
    echo "The salary of skillf if $skillf->salary <br>";
?>