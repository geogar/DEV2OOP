<?php
   require_once "dbConnect.php";
   
    
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
    <table class="table table-dark table-striped mt-5">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email Address</th>
            
            </tr>
        </thead>
        <tbody>
            <?php 
                //displaying data from the database
                $sql = "SELECT * FROM students";
                $result = $conn->query($sql);

                if ($result->num_rows > 0){
                    //output data of each row
                    while($row =  $result->fetch_assoc()){  
            ?>
                        <tr>
                            <td scope='row'><?php echo $row['id']; ?></td>
                            <td><?php echo $row['first_name']; ?></td>
                            <td><?php echo $row['last_name']; ?></td>
                            <td><?php echo $row['email']; ?></th>
                           
                        </tr>
                                
            <?php        
                    }
                } else {
                    echo "0 results";
                }
            ?>
        </tbody>
    </table>
        
        </div>
    </div>
</body>
</html>

<?php
    $conn->close();
?>