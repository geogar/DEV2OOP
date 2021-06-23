<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Name"><br>
        Year Level
        <select name="level" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select><br>
        <input type="text" name="units" placeholder="Total Units"><br>
        <input type="radio" name="add" value="yes">with Laboratory classes <br>
        <input type="radio" name="add" value="no">No Laboratory classes <br><br>

        <input type="submit" value="Calculate" name="calc">
    </form>
    <hr>
</body>
</html>
<?php
    if(isset($_POST["calc"])){
        include 'School.php';

        $name = $_POST["name"];
        $level = $_POST["level"];
        $units = $_POST["units"];
        $add = $_POST["add"];

        $s = new School();
        $s->set_values($name, $level, $units, $add);

        echo "Total tuition: " .number_format($s->compute(),2);
    }
?>