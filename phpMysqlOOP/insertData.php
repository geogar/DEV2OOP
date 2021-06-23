<?php
    require_once "dbConnect.php";
    
    if(isset($_POST['submit'])){
        
        //Retrieve input from user
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $email = $_POST['email'];


        $sql = "INSERT INTO students (first_name, last_name, email) VALUES ('$fName', '$lName', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully!";
        } else {
            echo "Error creating new record: " . $conn->error;
        }

        $conn->close();

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Register!</h2>
        <form action="" method="POST">
            First Name <input type="text" name="fName" class="form-control">
            Last Name <input type="text" name="lName" class="form-control">
            Email <input type="text" name="email" class="form-control">
            <input type="submit" name="submit" class="btn btn-primary my-3">
        
        </form>
    </div>
</body>
</html>