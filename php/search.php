<?php
    include_once "config.php";
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $output = "";
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE Fname LIKE '%{$searchTerm}%' OR Lname LIKE '%{$searchTerm}%' ");
    if(mysqli_num_rows($sql) > 0){
        include "data.php";
    }else{
        $output .= "No User Found";
    }
    echo $output;
?>