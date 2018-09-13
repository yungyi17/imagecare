<?php
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $file_name = $_FILES["fileToUpload"]["name"];
    $file_size = $_FILES["fileToUpload"]["size"];
    $file_description = $_POST["description"];
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image" . $check["mime"] . "<br><br>";
            $uploadOk = 1;
        } else {
            echo "File is not an image.<br><br>";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists<br><br>";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 50000000) {
        echo "Sorry, your file is too large.<br><br>";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br><br>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.<br><br>";
        echo "<a href=\"javascript:history.go(-1)\">Go back to main page...</a>";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.<br><br>";
            echo "<a href='uploadImage.html'>Go back to main page...</a><br><br>";

            require('connect.php');
            $query = "INSERT INTO upload (name, size, type, description, location) VALUES ('$file_name', '$file_size', '$imageFileType', '$file_description', '$target_file')";
            
            if (mysqli_query($conn, $query)) {             
                echo "New record created successfully";
                require('json_display.php');
            } else {
                echo "<br><br>Error: " . $query . "<br>" . mysqli_error($conn);
                echo "<a href='uploadImage.html'>Go back to main page...</a><br><br>";
            }

            //mysqli_close($conn);
        } else {
            echo "Sorry, there was an error uploading your file.<br><br>";
            echo "<a href='uploadImage.html'>Go back to main page...</a><br>";
        }
    }
?>