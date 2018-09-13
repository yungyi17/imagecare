<?php
    require("connect.php");
    if(isset($_GET['filename'])) {
        $filename = $_GET['filename'];
        
        $sql = "DELETE FROM upload WHERE name = '$filename'";
        if (mysqli_query($conn, $sql)) {
            unlink('images/'.$filename);          
            echo "New record deleted successfully";
            require("json_display.php");
        } else {
            echo "<br><br>Error: " . $sql . "<br>" . mysqli_error($conn);
            echo "<a href='uploadimage.html'>Go back to main page...</a><br><br>";
        }    
    }
?>