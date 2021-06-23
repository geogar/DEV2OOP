<?php
    class Person{
        public $name;
        public $age;
       

        public function introduce(){
            return "This Person is $this->age years old and has a name of $this->name <hr>";
        }
    }

    $person = new Person; // instance of a class
    $person->name = "Kakashi";
    $person->age = "35";

    echo $person->introduce();

    $person1 = new Person; //2nd instance of a class
    $person1->name = "Sarutobi";
    $person1->age = "80";

    
    echo $person1->introduce();
?>