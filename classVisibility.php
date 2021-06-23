<?php
    class Book{
        public $title;
        public $price;

        public function setTitle($newTitle){
            $this->title = $newTitle;
        }

        public function getTitle(){
            return $this->title;
        }
    }

    $math = new Book;
    $math->$title = "Algebra"; //Cannot access private property
    $math->setTitle("Algebra");
    echo $math->getTitle();
    // $math->price = 1000;
    // echo $math->price;

?>


