<?php
    while($row = mysqli_fetch_assoc($sql)){
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['Unique_ID']}
                OR outgoing_msg_id = {$row['Unique_ID']}) AND (outgoing_msg_id = {$outgoing_id}
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        if($row2){
            $result = $row2['msg'];
            $you = ($outgoing_id == $row2['outgoing_msg_id']) ? "You: " : "";
        } else {
            $result = "No Message Available";
            $you = "";
        }
        $msg = (strlen($result) > 12) ? substr($result, 0, 12).'...' : $result;
        ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
        $output .= '<a href="chat.php?user_id='.$row['Unique_ID'].'">
                    <div class="content">
                        <img src="php/images/'. $row['Image'] .'" alt="">
                        <div class="userDetails">                            
                            <h4>'. ucwords($row['Fname'] . " " . $row['Lname']) .' <i class="fa-solid fa-circle '.$offline.' "></i></h4>
                            <p>'. $you . $msg .'</p>
                        </div>
                    </div>
                </a>';
    }
?>