<?php
    require_once "Animal.php";
    
    class Dog extends Animal{ //inheritance
        private $owner;

        public function setDogValues($name, $type, $owner){
            $this->name = $name;
            $this->type = $type;
            $this->owner = $owner;
        }

        public function getOwner(){
            return "the dog $this->name owner is $this->owner";
        }

    }

?>