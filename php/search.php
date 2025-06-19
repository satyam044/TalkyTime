<?php
session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['Unique_ID'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $output = "";
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT Unique_ID = {$outgoing_id} AND (Fname LIKE '%{$searchTerm}%' OR Lname LIKE '%{$searchTerm}%') ");
    if(mysqli_num_rows($sql) > 0){
        include "data.php";
    }else{
        $output .= "No User Found";
    }
    echo $output;
?>