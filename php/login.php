<?php
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $status = "Active now";
            $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE Unique_ID = {$row['Unique_ID']}");
            if($sql2){
                $_SESSION['Unique_ID'] = $row['Unique_ID'];
                echo "success";
            }
        }else{
            echo "Email or Password is Incorrect!";
        }
    }else{
        echo "All input fields are required!";
    }
?>