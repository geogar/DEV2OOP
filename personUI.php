
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Person</title>
</head>
<body>
    <form action="" method="POST" class="w-50 mx-auto mt-3">
        <input type="text" name="name" class="form-control mt-1" placeholder="Name">
        <input type="text" name="address" class="form-control mt-1" placeholder="Address">
        <input type="text" name="age" class="form-control mt-1" placeholder="Age">
        <input type="submit" name="submit" class="btn btn-outline-secondary mt-1" value="Submit">
    </form>

    <?php
        if(isset($_POST["submit"])){
            require_once 'Person.php';

            $name = $_POST["name"];
            $add = $_POST["address"];
            $age = $_POST["age"];

            $person = new Person();
            $person->setValues($name, $add, $age);
        
            echo "Name: ". $person->getName() . "<br>";
            echo "Address: ". $person->getAdd() . "<br>";
            echo "Age: ". $person->getAge() . "<br>";
        }
    ?>
</body>
</html>