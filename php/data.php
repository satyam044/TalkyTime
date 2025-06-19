<?php
    while($row = mysqli_fetch_assoc($sql)){
            $output .= '<a href="chat.php?user_id='.$row['Unique_ID'].'">
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
?>