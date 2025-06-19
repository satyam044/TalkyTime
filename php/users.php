<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['Unique_ID'];
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT Unique_ID = {$outgoing_id}");
    $output = "";

    if(mysqli_num_rows($sql) == 1){
        $output .= "No users are available to chat";
    } elseif(mysqli_num_rows($sql) > 0){
        include "data.php";
    }
    echo $output;
?>