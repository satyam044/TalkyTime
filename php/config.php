<?php
    $conn = mysqli_connect("localhost","root","","talkytime");
    if (!$conn) {
        echo "Database not Connected" . mysqli_connect_error();
    }
?>