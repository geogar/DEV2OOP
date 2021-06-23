<?php
    class Student {
        public $first_name;
        public $last_name;

        public function say_hello(){
            return "Hello World!";
        }
    }

   $Anna = new Student;
   $Anna->first_name = "Anna";
   echo $Anna->first_name . "<br>";

   echo $Anna->say_hello();
?>