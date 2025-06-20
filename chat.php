<?php
    session_start();
    if(!isset($_SESSION['Unique_ID'])){
        header("location: login.php");
    }
?>
<?php include_once "header.php" ?>
<body>
    <div class="wrapper chatWrap">
        <section class="chat">
            <?php
            include_once "php/config.php";
            $user_id = mysqli_real_escape_string($conn, $_GET['uid']);
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE Unique_ID = {$user_id}");
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
            ?>
            <div class="chatHeader">
                <a href="./users.php"><i class="fa-solid fa-arrow-left"></i></a>
                <img src="./php/images/<?php echo $row['Image'] ?>" alt="">
                <div class="userDetails">
                    <h4 class="userName"><?php echo ucwords($row['Fname'] . " " . $row['Lname']) ?></h4>
                    <p class="userStatus"><?php echo $row['status'] ?></p>
                </div>
            </div>
            <div class="chatMsg">
            </div>
            <form action="#" class="chatSend">
                <div class="chatInput">
                    <input type="text" name="outgoing_id" value="<?php echo $_SESSION['Unique_ID']; ?>" hidden>
                    <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                    <i class="fa-solid fa-microphone"></i>
                    <input type="text" name="Message" id="Message">
                </div>
                <button type="submit"><i class="fa-solid fa-right-long"></i></button>
            </form>
        </section>
    </div>

    <script src="./JavaScript/microphone.js"></script>
    <script src="./JavaScript/chat.js"></script>
</body>

</html>