<?php

//index.php


//Include Configuration File
include('google_config.php');



$login_button = '';


if (isset($_GET["code"])) {

    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


    if (!isset($token['error'])) {

        $google_client->setAccessToken($token['access_token']);
        session_start();

        $_SESSION['access_token'] = $token['access_token'];


        $google_service = new Google_Service_Oauth2($google_client);


        $data = $google_service->userinfo->get();


        if (!empty($data['given_name'])) {
            $_SESSION['user'] = $data['given_name'];
            $a = $data['given_name'];
        }

        if (!empty($data['given_name'])) {
            $_SESSION['username'] = $data['given_name'];
            $b = $data['given_name'];
        }



        if (!empty($data['email'])) {
            $_SESSION['email'] = $data['email'];
            $c = $data['email'];
        }



        if (!empty($data['picture'])) {
            $_SESSION['pic'] = $data['picture'];
            $d = $data['picture'];
        }
    }
}


if (!isset($_SESSION['access_token'])) {
    $login_button = '<a href="' . $google_client->createAuthUrl() . '"><img src="./assests/googlebtn.png"></a>';
}


?>




<?php
include "./config.php";

if (isset($_POST['signin'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['your_pass']);

    $sql = "select user_id, username, user, password, email, pic from users where username='{$username}' and password='{$password}'";
    $result = mysqli_query($conn, $sql) or die("query failed");

    if (mysqli_num_rows($result) > 0) {
        while ($rows = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION['username'] = $rows['username'];
            $_SESSION['user_id'] = $rows['user_id'];
            $_SESSION['user'] = $rows['user'];
            $_SESSION['email'] = $rows['email'];
            $_SESSION['pic'] = $rows['pic'];
            $_SESSION['password'] = $rows['password'];

            if (isset($_POST['remember-me'])) {
                setcookie('usernamecookie', $rows['username'], time() + 86400);
                setcookie('passcookie', $rows['password'], time() + 86400);
            }

            if ($rows['username'] == 'admin') {
                header("Location: blog_check.php");
            } else
                header("Location: index.php");
        }
    } else {
        echo "<script type=\"text/javascript\">alert('Wrong credentials')</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-signin-client_id" content="https://477764146860-3msa6khrub9l6r211lto3585qf2719ed.apps.googleusercontent.com/">

    <title>Sign In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../public/fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
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
                        <a class="nav-link mr-3 x3" href="./index.php#s5">Contact Us<span class="sr-only">(current)</span></a>
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


    <div class="main ab">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container lgn">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="./assests/signin-image.jpg" alt="sing up image"></figure>
                        <a href="signup.php" class="signup-image-link">New User?</a>
                    </div>

                    <div class="signin-form" style="margin-top: 40px;">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" id="login-form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="form-group n1">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="your_name" placeholder="Username" value="<?php
                                                                                                                if (isset($_COOKIE['usernamecookie'])) {
                                                                                                                    echo $_COOKIE['usernamecookie'];
                                                                                                                }
                                                                                                                ?>" />
                            </div>
                            <div class="form-group n2">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password" value="<?php
                                                                                                                        if (isset($_COOKIE['passcookie'])) {
                                                                                                                            echo $_COOKIE['passcookie'];
                                                                                                                        }
                                                                                                                        ?>" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" value="true" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="gbtn" style="margin-top: -20px;margin-left:-10px"><?php echo $login_button; ?></div>
                            <div class="form-group form-button" style="margin-left: 60px;margin-top: 20px;">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <script src="./js/login.js" type="text/javascript"></script>
    <!-- JS -->
    <script src="../public/javascript/jquery/jquery.min.js"></script>
</body>

</html>