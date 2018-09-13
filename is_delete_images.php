<?php
    if(isset($_POST['delete_file'])) {
        $filename = $_POST['file_name']; ?>
        <script>
            var answer = confirm('Are you sure to delete this file?');
            if (answer === true) {
                window.location.href = "delete_images.php?filename=<?php echo $filename ?>";
            } else {
                window.location.href = "read.php";
            }
        </script>
    <?php }
?>