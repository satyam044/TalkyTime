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
                <a href="#">
                    <div class="content">
                        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/7d09e7176216013.64c10a8ccfd09.png">
                        <div class="userDetails">                            
                            <h4>Satyam Mishra <i class="fa-solid fa-circle"></i></h4>
                            <p>Message</p>
                        </div>
                        <span>12:00 pm</span>
                    </div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/7d09e7176216013.64c10a8ccfd09.png">
                        <div class="userDetails">                            
                            <h4>Satyam Mishra <i class="fa-solid fa-circle"></i></h4>
                            <p>Message</p>
                        </div>
                        <span>12:00 pm</span>
                    </div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/7d09e7176216013.64c10a8ccfd09.png">
                        <div class="userDetails">                            
                            <h4>Satyam Mishra <i class="fa-solid fa-circle"></i></h4>
                            <p>Message</p>
                        </div>
                        <span>12:00 pm</span>
                    </div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/7d09e7176216013.64c10a8ccfd09.png">
                        <div class="userDetails">                            
                            <h4>Satyam Mishra <i class="fa-solid fa-circle"></i></h4>
                            <p>Message</p>
                        </div>
                        <span>12:00 pm</span>
                    </div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/7d09e7176216013.64c10a8ccfd09.png">
                        <div class="userDetails">                            
                            <h4>Satyam Mishra <i class="fa-solid fa-circle"></i></h4>
                            <p>Message</p>
                        </div>
                        <span>12:00 pm</span>
                    </div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/7d09e7176216013.64c10a8ccfd09.png">
                        <div class="userDetails">                            
                            <h4>Satyam Mishra <i class="fa-solid fa-circle"></i></h4>
                            <p>Message</p>
                        </div>
                        <span>12:00 pm</span>
                    </div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/7d09e7176216013.64c10a8ccfd09.png">
                        <div class="userDetails">                            
                            <h4>Satyam Mishra <i class="fa-solid fa-circle"></i></h4>
                            <p>Message</p>
                        </div>
                        <span>12:00 pm</span>
                    </div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/7d09e7176216013.64c10a8ccfd09.png">
                        <div class="userDetails">                            
                            <h4>Satyam Mishra <i class="fa-solid fa-circle"></i></h4>
                            <p>Message</p>
                        </div>
                        <span>12:00 pm</span>
                    </div>
                </a>
            </div>
        </section>
    </div>


    <script src="./JavaScript/users.js"></script>
</body>

</html>