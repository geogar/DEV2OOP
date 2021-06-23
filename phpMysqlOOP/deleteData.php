<?php
    require_once "dbConnect.php";

    $sql = "DELETE FROM students WHERE id=31;";
    
    if ($conn->query($sql) === TRUE){
        echo "Record deleted successfully!";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    
        
    $conn->close();
    
    
?>