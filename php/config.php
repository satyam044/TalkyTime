<?php
    $conn = mysqli_connect("localhost","root","","chatapp");
    if (!$conn) {
        echo "Database not Connected" . mysqli_connect_error();
    }
?>