<html>
<body>
<div id="wrapper">

<div id="file_div">
<?php
    $folder = "images/";

    if ($dir = opendir($folder)) {
        echo "<ul>";
        while (($file = readdir($dir)) !== false) {
            echo "<li><b>File name:</b> " . $file;
            echo "<form method='post' action='is_delete_images.php'>";
            echo "<input type='hidden' name='file_name' value='" . $file . "'>";
            echo "<input type='submit' name='delete_file' value='Delete File'>";
            echo "</form>";
            echo "</li>";            
        }
        echo "</ul>";
        closedir($dir);
    }
?>
</div>

</div>
</body>
</html>