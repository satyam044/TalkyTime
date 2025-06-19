<?php
    session_start();
    if(!isset($_SESSION['Unique_ID'])){
        header("location: login.php");
    }
?>
<?php include_once "header.php" ?>
<body>
    <div class="wrapper">
        <section class="user">
            <?php
            include_once "php/config.php";
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE Unique_ID = {$_SESSION['Unique_ID']}");
            if (mysqli_num_rows($sql) > 0) {
                $row = mysqli_fetch_assoc($sql);
            }
            ?>
            <div class="userTop">
                <div class="userL">
                    <img src="php/images/<?php echo $row['Image'] ?>" alt="">
                    <div class="userDetails">
                        <h2 class="userName"><?php echo ucwords($row['Fname'] . " " . $row['Lname']) ?></h2>
                        <p class="userStatus"><?php echo $row['status'] ?></p>
                    </div>
                </div>
                <div class="userR">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
            </div>
            <div class="users">
                <div class="userSearch">
                    <p>Select an user to start chat</p>
                    <input type="text" name="search" placeholder="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </section>
    </div>


    <script src="./JavaScript/users.js"></script>
</body>

</html>