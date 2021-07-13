<?php
include "./config.php";

session_start();
$user = $_GET['user'];

$sql = "SELECT * FROM users WHERE user='{$user}'";
$result = mysqli_query($conn, $sql) or die("error" . mysqli_error($conn));

while ($rows = mysqli_fetch_assoc($result)) {
    $u = $rows['user_id'];
    $email = $rows['email'];
    $username = $rows['username'];
    $pic = $rows['pic'];
    $password = $rows['password'];
}

?>

<!doctype html>
<html lang="en">

<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/profile.css">

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amita:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amiko:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Texturina:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>

    <!-- Anime -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

    <title>Profile</title>
    <style type="text/css">

    </style>
</head>

<body>
    <header style="overflow-y: hidden;">
        <nav class="navbar navbar-expand-lg navbar-custom fixed-top" style="overflow-y: hidden;">
            <a class="navbar-brand ml-1" href="#s1" style="margin-left: 15px !important;">BHARATVARSH</a>
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

    <section class="contain kkll cov">
        <div style="padding-top:130px;overflow-y: hidden;">
            <div id="home" style="opacity: 0.75;" class="jumb container mt-0">

                <h1 class="text-center amita ml6"><span class="text-wrapper">
                        <span class="letters">Profile</span>
                    </span></h1>

            </div>
        </div>
        <div style="padding-top: 2vw;">
            <div id="history" style="opacity: 0.75;" class="jumb container mt-0">
                <div class="row mt-0">
                    <div class="col-1"></div>
                    <div class="col-10 d-flex justify-content-center">
                        <!-- <h3 class="display-4" style="font-weight: bold; overflow: hidden;">History</h3><br> -->
                        <!-- <p class="text-justify" style="font-size: 1.25rem;">
        Bharatvash is an open platform where you can share your thoughts and facts related to the history of The Great Bharatvarsh (India).
        You can get authentic information about Indian Mytholigies. There are many misunderstanding related to the country, that could be made clear on Bharatvarsh platform. </p> -->
                    </div>
                    <div class="col-1"></div>
                </div>



            </div>
        </div>
    </section>

    <section>
        <div class="page-content page-container" id="page-content" style="margin-top: 80px;overflow-y:hidden;">
            <div class="padding" style="overflow-y: hidden;">
                <div class="row d-flex justify-content-center" style="overflow-y: hidden;">
                    <div class="col-xl-12 col-md-12" style="overflow-y: hidden;">
                        <div class="cards user-card-full" style="overflow-y: hidden;">
                            <div class="row m-l-0 m-r-0 adj" style="height: 400px;overflow-y:hidden;">
                                <div class="col-sm-4 user-profile" style="background-color:rgba(233, 173, 120, 0.3);">
                                    <div class="card-block text-center text-white">
                                        <div class="m-b-25" style="margin-top: 60px;">


                                            <?php

                                            if (isset($password))
                                                echo '<img src="./uploads/', $pic, '" class="img-radius" alt="User-Profile-Image" height="200px">';

                                            else {
                                                $image = $pic;
                                                $imageData = base64_encode(file_get_contents($image));
                                                echo '<img src="data:image/jpeg;base64,' . $imageData . '" class="img-radius" height="200px" >';
                                            }


                                            ?>



                                        </div>

                                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8 back" style="overflow-y: hidden;background-color:rgba(233, 173, 120, 0.46);">
                                    <div class="card-block" style="margin-top: 60px;overflow-y: hidden;text-align:center;">
                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600" style="font-size: 35px;text-align:center;color:#511616;">Information</h6>
                                        <div class="row" style="margin-top: 50px;overflow-y: hidden;">
                                            <div class="col-sm-6 nm">
                                                <p class="m-b-10 f-w-600 head" style="color:#511616;">Name<img src=" ./assests/id-card.png" style="height:35px;
                                        width:30px; margin-left:20px;margin-top: -10px;"></p>
                                                <?php echo '<h6 class="text-muted f-w-400" style="font-size: 18px;">' . $user . '</h6>'; ?>
                                            </div>
                                            <div class="col-sm-6 nm1">
                                                <p class="m-b-10 f-w-600 head" style="color:#511616;">Email<img src="./assests/email.png" style="height:25px;width:30px; margin-left:20px;margin-top: 0px;"></p>
                                                <?php echo '<h6 class="text-muted f-w-400" style="font-size: 18px;">' . $email . '</h6>'; ?>
                                            </div>
                                        </div><br>

                                        <div class="row" style="overflow-y: hidden;">
                                            <div class="col-sm-6 nm2">
                                                <p class="m-b-10 f-w-600 head" style="color:#511616;">UserName<img src="./assests/atr.png" style="height:25px;padding-top:1px;
                                        width:30px; margin-left:10px;margin-top: 3px;"></p>
                                                <?php echo '<h6 class="text-muted f-w-400" style="font-size: 18px;">' . $username . '</h6>'; ?>
                                            </div>
                                            <div class="col-sm-6 nm3" style="overflow-y: hidden;">
                                                <p class="m-b-10 f-w-600 head" style="color:#511616;">Blogs Written <img src="./assests/save-button.png" style="height:25px;padding-top:1px;
                                        width:30px; margin-left:10px;margin-top: 5px;"></p>
                                                <h6 class="text-muted f-w-400">
                                                    <?php



                                                    $i = 0;
                                                    $sql = "select post_id from posts where user_id=$u";
                                                    $result = mysqli_query($conn, $sql);
                                                    $num = mysqli_num_rows($result);


                                                    while ($row = mysqli_fetch_assoc($result)) {

                                                        $i++;
                                                        $post_id = $row['post_id'];
                                                        $sql2 = "SELECT * FROM posts WHERE post_id=$post_id";
                                                        $result2 = mysqli_query($conn, $sql2);
                                                        $num = mysqli_num_rows($result2);
                                                    }
                                                    echo $i;
                                                    ?>



                                                </h6>
                                            </div>
                                        </div>
                                        <ul class="social-link list-unstyled m-t-40 m-b-10">
                                            <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contain2 mt-5 " id="latest">
        <h3 class="display-4 pl-5 pl-md-5" style="font-weight: bold; font-family: 'Texturina', serif;">Blogs Written<i class="fi-cnlrxm-chevron-solid"></i></h3>
        <div class="mt-5" style="background: rgba(233, 173, 120, 0.46);">
            <div class="container pt-5 pb-4 cov">
                <div class="row">

                    <?php


                    $i = 0;
                    $sql = "select post_id from posts where user_id=$u AND approval=1";
                    $result = mysqli_query($conn, $sql);
                    $num = mysqli_num_rows($result);
                    if ($num == 0) {

                    ?>
                        <div class="col-lg-3 col-sm-5 col-11 text-white">
                            <div class="card" style="width: 100%; height: 90%;">
                                <img class="card-img-top" src="./uploads/noblog.png" alt="Card image cap" height="240px">
                                <div class="card-body card-ki-body">
                                    <h5 class="card-text text-center">No Content</h5>

                                </div>
                                <p class="card-text text-center">Nooooo</p>
                            </div>
                        </div>
                        <?php }

                    while ($row = mysqli_fetch_assoc($result)) {

                        $i++;
                        $post_id = $row['post_id'];
                        $sql2 = "SELECT * FROM posts WHERE post_id=$post_id";
                        $result2 = mysqli_query($conn, $sql2);
                        $num = mysqli_num_rows($result2);

                        if ($num == 0) {
                            echo '<h4 align="center" class="card card-title">You have not posted any Blog yet</h4>';
                            break;
                        }
                        while ($row2 = mysqli_fetch_assoc($result2)) {
                            $title = $row2['title'];
                            $readtime = $row2['readtime'];
                            $content = $row2['content'];
                            $image = $row2['image'];
                            $user_id = $row2['user_id'];

                        ?>


                            <div class="col-lg-3 col-sm-5 col-11 text-white inl">
                                <div class="card" style="width: 100%; height: 90%;">
                                    <img class="card-img-top" src="./uploads/<?php echo $image ?>" alt="Card image cap" height="240px">
                                    <div class="card-body card-ki-body">
                                        <h5 class="card-text text-center"><a href="./articlepg.php?id=<?php echo $post_id; ?>"><?php echo $title ?></a></h5>

                                    </div>
                                    <?php

                                    $sql1 = "SELECT user FROM users WHERE user_id={$u}";
                                    $result2 = mysqli_query($conn, $sql1) or die("Query Failed");
                                    $row = mysqli_fetch_assoc($result2);
                                    $user = $row['user'];


                                    ?>
                                    <p class="card-text text-center"><a href="./profile.php?user=<?php echo $user ?>">By

                                            <?php echo $user; ?>


                                        </a></p>
                                </div>
                            </div>


                    <?php
                        }
                    }

                    ?>



                </div>






            </div>
        </div>
    </section>

    <div class="mt-5" id="joinus" style="overflow-y: hidden;">
        <div class="container cu">
            <div class="row">
                <div class="col-sm-12 col-lg-5 m-5" style="border-right: 3px solid #511616">
                    <div class="contactus">
                        <h2 class="display-4 text-fill text-center" style="font-weight: 700; padding-top: 5%;">Contact Us</h2>
                        <p class="text-fill text-center">Samriddhi Dwivedi</p>
                        <p class="text-fill text-center" style="color: #511616">samriddhidwivedi07@gmail.com</p><br>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-4">
                            <a class="" href="https://www.instagram.com/samriddhi_dwivedi/" style="border-radius: 25%;"><i class="fi-xwsux2-instagram"></i></a>
                        </div>
                        <!-- <div class="col-2">
              <a class="btn" href="#" style="background-color:#FFE8D4; color:#511616; border-radius: 25%;">
                <i class="fi-cwlux2-facebook-circle"></i></a>
            </div> -->
                        <div class="col-4">
                            <a class="" href="https://www.linkedin.com/in/samriddhi-dwivedi-3979b4144/" style="border-radius: 25%;">
                                <i class="fi-snlux2-linkedin"></i></a>
                        </div>
                        <div class="col-4">
                            <a class="" href="https://twitter.com/Samriddhi0711" style="border-radius: 25%;">
                                <i class="fi-xnsux2-twitter"></i></a>
                        </div>
                    </div>



                    <!-- <p class="text-fill text-center" style="color: #511616">Independently developed & designed by:- </p>
          -->

                </div>
                <div class="col-sm-12 col-lg-5 ml-5 mt-5">
                    <form>
                        <input type="text" id="name" name="name" placeholder="Your Name">
                        <input type="email" id="email" name="email" placeholder="Your Email">
                        <textarea id="message" name="message" placeholder="Your Message"></textarea>
                        <div align="right">
                            <input type="submit" id="submit" class="btn" value="SUBMIT" style="">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>


    <script type="text/javascript">
        $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 200);




        });
    </script>

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

    <script src="./js/category.js" type="text/javascript"></script>

</body>

</html>