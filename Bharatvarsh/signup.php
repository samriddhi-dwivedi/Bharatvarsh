<?php
include "./config.php";

$name = $email = $pass = $pic = $subscriber = "";
$name_err = $email_err = $pass_err = $username_err = "";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $sql = "select * from users where username = '{$username}'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        echo "<script>alert('Username Already Taken!')</script>";
        $username_err = 'Error';
    }
    if (empty(trim($_POST['username']))) {
        $username_err = "Username cannot be blank";
    }
    if (empty(trim($_POST['name']))) {
        $name_err = "Name cannot be blank";
    } else {
        $name = trim($_POST['name']);
    }

    if (empty($_POST['pass'])) {
        $pass_err = "Password cannot be blank";
    } else {
        $pass = $_POST['pass'];
    }

    $files = $_FILES['file'];
    $filename = $files['name'];
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];
    $fileext = explode('.', $filename);
    $filecheck = strtolower(end($fileext));
    $fileextstored = array('png', 'jpg', 'jpeg');
    if (empty($fileerror) && !empty($filename)) {
        if (in_array($filecheck, $fileextstored)) {
            $destinationfile = 'uploads/' . $filename;
            move_uploaded_file($filetmp, $destinationfile);
            $pic = $filename;
        }
    }
    if (empty($filename))
        $pic = 'null.png';


    if (empty(trim($_POST["email"]))) {
        $email_err = "Email cannot be blank";
    } else {
        $email = trim($_POST['email']);
    }

    $subscriber = isset($_POST['agree-term']);



    if (empty($username_err) && empty($name_err) && empty($email_err) && empty($pass_err)) {
        $sql = "insert into users(username, user, password, pic, email, subscriber) values ('$username','$name','$pass','$pic','$email','$subscriber')";
        mysqli_query($conn, $sql);
        if ($sql) {
            header("Location: login.php");
        } else
            echo "<script>alert('Something went wrong..');";
    } else {
        if ($username_err != "Error")
            echo "<script>alert('Fields cannot be left blank')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">

    <!-- Main css -->
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/54ad1eac8d.js" crossorigin="anonymous"></script>

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amita:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amiko:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Texturina:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>


    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <header style="overflow-y: hidden;">
        <nav class="navbar navbar-expand-lg navbar-custom fixed-top" style="overflow-y: hidden;">
            <a class="navbar-brand ml-1" href="#s1">BHARATVARSH</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="overflow-y: hidden;">
                <ul class="navbar-nav ml-auto  nav-ul">

                    <li class="nav-item active">
                        <a class="nav-link mr-3 h" href="./index.php#s1">Home<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link mr-3 x" href="./index.php#s2">About<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link mr-3 x1" href="./index.php#s3">Latest<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link mr-3 x2" href="./index.php#s4">Popular<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link mr-3 x3" href="./index.php#s5">Contact<span class="sr-only">(current)</span></a>
                    </li>
                    <?php
                    if (isset($_SESSION['user_id'])) {
                    ?>


                        <li class="nav-item active">
                            <a class="nav-link mr-3 hov" href="./saved_blogs.php">Saved<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link mr-3 hov" href="./profile.php?user=<?php echo $_SESSION['user'] ?>">Profile<span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link mr-3 hov" href="./php/logout.php">SignOut<span class="sr-only">(current)</span></a>
                        </li>

                    <?php } else {
                    ?>
                        <li class="nav-item active">
                            <a class="nav-link mr-3 hov" href="./login.php">Login<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link mr-3 hov" href="./signup.php">SignUp<span class="sr-only">(current)</span></a>
                        </li>

                    <?php
                    }
                    ?>



                    <li class="nav-item active">
                        <a class="nav-link mr-3 post" href="./post_blog.php">Post a Blog<span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item active">
            <a class="nav-link mr-3" href="./ourteam.html">OUR TEAM<span class="sr-only">(current)</span></a>
          </li> -->
                </ul>
            </div>
        </nav>
    </header>


    <div class="main" style="overflow-y: hidden;">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container" style="overflow-y: hidden;">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                            <div class="form-group n1" style="margin-top: -5px;">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" />
                            </div>
                            <div class="form-group n2">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Chose your username" />
                            </div>
                            <div class="form-group n3">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group n4">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Chose Your Password" />
                            </div>
                            <!-- <div class="form-group n4" style="margin-bottom: 40px;">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Chose your Password" />
                            </div> -->
                            <div class="n5"> Chose your profile picture</i> <input type="file" id="img" name="file" accept="image/*"></div>
                            <div class="form-group" style="margin-top: 20px;">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" value="true" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I wish to subscribe to the newsletter!!</label>
                            </div>

                            <div class="form-group form-button" style="margin-top: -30px;">
                                <input type="submit" name="submit" id="signup" class="form-submit" value="Register" />
                            </div>

                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="./assests/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link already">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <script src="./js/signup.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>