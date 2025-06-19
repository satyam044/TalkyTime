<?php include_once "header.php" ?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Log In</header>
            <form action="#">
                <div class="errorTxt"></div>
                <div class="field">
                    <label for="email">Email Address</label>
                    <input name="email" type="email" id="email" placeholder="Enter your email">
                </div>
                <div class="field password">
                    <label for="password">Password</label>
                    <input name="password" type="password" id="password" placeholder="Enter new password">
                    <i class="fa-regular fa-eye"></i>
                </div>
                <div class="field">
                    <input type="submit" value="Continue To Chat">
                </div>
            </form>
            <div class="link">Not Yet Signed Up? <a href="index.php">Sign Up</a></div>
        </section>
    </div>


    <script src="./JavaScript/passtoggle.js"></script>
    <script src="./JavaScript/login.js"></script>
</body>
</html>