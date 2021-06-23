<?php
    class Student{
        public $first_name;
        public $last_name;

        public function full_name(){
            return "$this->first_name $this->last_name <hr>";
        }
    }

    $student1= new Student;
    $student1->first_name = "Hinata";
    $student1->last_name = "Hyuga";

    echo $student1->full_name();


    $student2= new Student;
    $student2->first_name = "Naruto";
    $student2->last_name = "Uzumaki";

    echo $student2->full_name();
?>