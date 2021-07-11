<?php
include "./config.php";

session_start();
if (empty($_SESSION['user_id'])) {
  header("Location: ./login.php");
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

  <title>Saved Blogs</title>
  <style type="text/css">

  </style>
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

  <section class="container-fluid cov" style="
          background: linear-gradient(180deg, rgba(255, 255, 255, 0) 85%, #fff1e5 100%),
            url('./assests/KeyPicture.png') no-repeat; background-size: cover; margin-top: 65px; border-radius: 20px;">


    <div style=" padding-top:130px;overflow-y: hidden;">
      <div id="home" style="opacity: 0.75;" class="jumb container mt-0">

        <h1 class="text-center amita ml6"><span class="text-wrapper">
            <span class="letters">Saved Blogs</span>
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

  <section class="contain2 mt-5" id="latest">
    <h3 class="display-4 pl-5 pl-md-5" style="font-weight: bold; font-family: 'Texturina', serif;">All Articles<i class="fi-cnlrxm-chevron-solid"></i></h3>
    <div class="mt-5" style="background: rgba(233, 173, 120, 0.46);">
      <div class="container pt-5 pb-4">
        <div class="row">

          <?php


          $u = $_SESSION['user_id'];
          $sql = "select post_id from saved where user_id=$u";
          $result = mysqli_query($conn, $sql);
          $num = mysqli_num_rows($result);
          if ($num == 0) {

          ?>
            <div class="col-lg-3 col-sm-5 col-11 text-white">
              <div class="card" style="width: 100%; height: 90%;">
                <img class="card-img-top" src="./uploads/noblog.png" alt="Card image cap" height="240px">
                <div class="card-body card-ki-body">
                  <h5 class="card-text text-center">No Saved Blogs</h5>

                </div>
                <p class="card-text text-center">Nooooo</p>
              </div>
            </div>

            <?php
          }

          while ($row = mysqli_fetch_assoc($result)) {

            $post_id = $row['post_id'];
            $sql2 = "SELECT * FROM posts WHERE post_id=$post_id";
            $result2 = mysqli_query($conn, $sql2);
            $num = mysqli_num_rows($result2);

            if ($num == 0) {
              echo '<h4 align="center" class="card card-title">No Content have been Saved Yet</h4>';
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
                  <p class="card-text text-center"><a href="#">By

                      <?php

                      $sql1 = "SELECT user FROM users WHERE user_id={$u}";
                      $result2 = mysqli_query($conn, $sql1) or die("Query Failed");
                      $row = mysqli_fetch_assoc($result2);
                      $user = $row['user'];

                      echo $user;
                      ?>


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