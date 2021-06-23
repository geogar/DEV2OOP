<?php
    class Person{
        private $name;
        private $address;
        private $age;

        public function setValues($name, $address, $age){
            $this->name = $name;
            $this->address = $address;
            $this->age = $age;
        }

        public function getName(){
            return $this->name;
        }

        public function getAdd(){
            return $this->address;
        }

        public function getAge(){
            return $this->age;
        }
    }
?>