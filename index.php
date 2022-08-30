<?php
    class Person{
        public $name;
        public $age;

        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        public  function getInfo(){
            return $this->name." ".$this->age;
        }
    }

    $person_1 = new Person("Hung", 22);
    echo $person_1->getInfo();
?>