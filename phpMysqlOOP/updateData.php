<?php
    require_once "dbConnect.php";

    $fName = 'Boruto'

    $sql = "UPDATE students SET first_name='$fName', last_name='Ozawa', email='johnsmith@gmail.com' WHERE id=29;";
    
    if ($conn->query($sql)){
        echo "Record updated successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
            
    $conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="file" >
</body>
</html>