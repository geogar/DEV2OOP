<?php
    require_once "Dog.php";

    $dog = new Dog;
    $dog->setDogValues("Browny", "Pet", "George");
    echo $dog->getOwner();

?>