<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>TalkyTime-Signup Now</title>
</head>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Sign Up</header>
            <form action="#" enctype="multipart/form-data">
                <div class="errorTxt"></div>
                <div class="nameDetails">
                    <div class="field">
                        <label for="first-name">First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field">
                        <label for="last-name">Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="field">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="field password">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Enter new password" required>
                    <i class="fa-regular fa-eye"></i>
                </div>
                <div class="field">
                    <label for="image">Select Image</label>
                    <input type="file" name="image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue To Chat">
                </div>
            </form>
            <div class="link">Already Signed Up? <a href="login.php">Login Now</a></div>
        </section>
    </div>


    <script src="./JavaScript/passtoggle.js"></script>
    <script src="./JavaScript/signup.js"></script>
</body>
</html>