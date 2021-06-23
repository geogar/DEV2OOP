<?php
    class Animal{
        private $name;
        private $type;

        public function setAnimalValues($name, $type){
            $this->name = $name;
            $this->type = $type;
        }

        public function introduceAnimal(){
            return "The animal's name is $this->name and the type is: $this->type";
        }

        public function sound(){
            return "Make sound";
        }
    }
?>