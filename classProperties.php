<?php
    class Student{
        public $first_name;
        public $last_name;
        public $employed;

    }

    $Masa = new Student; // 1st instance of the class
    $Masa->first_name = "Masashi";
    $Masa->last_name = "Ozawa";

    echo $Masa->first_name. " ";
    echo $Masa->last_name. "<hr>";

    $Ryosuke = new Student; // 2nd instance of the class
    $Ryosuke->first_name = "Ryosuke";
    $Ryosuke->last_name = "Maki";
    $Ryosuke->employed = "Yes";

    echo "Student Name:".$Ryosuke->first_name. " " . $Ryosuke->last_name . "<br> Employment Status: " . $Ryosuke->employed . "<br>";
    

?>