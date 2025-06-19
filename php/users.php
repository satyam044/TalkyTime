<?php
    session_start();
    include_once "config.php";
    $sql = mysqli_query($conn, "SELECT * FROM users");
    $output = "";

    if(mysqli_num_rows($sql) == 1){
        $output .= "No users are available to chat";
    } elseif(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            $output .= '<a href="#">
                    <div class="content">
                        <img src="php/images/'. $row['Image'] .'" alt="">
                        <div class="userDetails">                            
                            <h4>'. ucwords($row['Fname'] . " " . $row['Lname']) .' <i class="fa-solid fa-circle"></i></h4>
                            <p>Message</p>
                        </div>
                        <span>12:00 pm</span>
                    </div>
                </a>';
        }
    }
    echo $output;
?>