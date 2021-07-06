<?php
include "./config.php";

session_start();

$p_id = $_GET['id'];
$sql = "SELECT * FROM posts WHERE post_id={$p_id}";
$result = mysqli_query($conn, $sql) or die("Query Failed");

while ($row = mysqli_fetch_assoc($result)) {
  $user_id = $row['user_id'];
  $class = $row['class'];
  $title = $row['title'];
  $readtime = $row['readtime'];
  $content = $row['content'];
  $image = $row['image'];
  $likes = $row['likes'];
  $dislikes = $row['dislikes'];
}

$sql1 = "SELECT user FROM users WHERE user_id={$user_id}";
$result2 = mysqli_query($conn, $sql1) or die("Query Failed");
$row = mysqli_fetch_assoc($result2);
$user = $row['user'];

?>

<!doctype html>
<html lang="en">

<head>


  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./css/articlepg.css">

  <!--Google fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Amita:wght@400;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Amiko:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Texturina:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- icons -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/54ad1eac8d.js" crossorigin="anonymous"></script>

  <script defer src="https://friconix.com/cdn/friconix.js"> </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <!-- jquery script for comment button click -->
  <!-- <script>
    var $counter = 0;
    $(document).ready(function() {
      $("#comm").click(function() {
        if ($counter == 0) {
          $counter = 1;
          $("#txtar").show();
          $("#post_button").show();
        } else {
          $counter = 0;
          $("#txtar").hide();
          $("#post_button").hide();
        }
      });
    });
  </script> -->

  <title> Article</title>

</head>

<body>

  <header style="overflow-y: hidden;">
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
      <a class="navbar-brand ml-1" href="#home">BHARATVARSH</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="overflow-y: hidden;">
        <ul class="navbar-nav ml-auto  nav-ul">

          <li class="nav-item active">
            <a class="nav-link mr-3 h" href="#joinus">Home<span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active">
            <a class="nav-link mr-3 x1" href="#joinus">Latest<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link mr-3 x2" href="#joinus">Popular<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link mr-3 x3" href="#joinus">Contact Us<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link mr-3 post" href="#joinus">Post a Blog<span class="sr-only">(current)</span></a>
          </li>
          <!-- <li class="nav-item active">
              <a class="nav-link mr-3" href="./ourteam.html">OUR TEAM<span class="sr-only">(current)</span></a>
            </li> -->
        </ul>
      </div>
    </nav>
  </header>

  <section class="mainsection">
    <h1 class="display-3 text-center" style="padding-top: 13vw; font-weight:400;"><?php echo $title ?></h1>
    <div class="row pt-5">
      <div class="col-6 d-flex justify-content-center">
        <i class="fi-xnsux3-user-solid"></i>
        <?php echo $user ?><br>06-09-2019
      </div>
      <div class="col-6 text-center"><?php echo $readtime ?> Min Read
      </div>


    </div>

    <div class="row">
      <div class="col-2"></div>
      <div class="col-8 d-flex justify-content-center">
        <img src="./uploads/<?php echo $image; ?>" class="img-fluid mt-4">
      </div>
      <div class="col-2"></div>
    </div>

    <div class="row mt-5">
      <div class="col-lg-2 col-1"></div>
      <div class="col-lg-8 col-10 d-flex justify-content-center">
        <p class="text-justify" style="font-size: 1.25rem;"><?php echo nl2br($content) . "\n"; ?>

        </p>
        <hr>
      </div>
      <div class="col-lg-2 col-1"></div>
    </div>

    <!--Adding condition, that if the admin sees the post for approval he doesn't see the like comment and save buttons -->
    <?php
    if ($_SESSION['username'] != 'admin') {
    ?>
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-2"></div>

          <div class="col-lg-8" style="overflow-y: hidden;">



            <!-- LIKE BUTTON -->

            <div class="likebutton">
              <a href="./like_post.php?id=<?php echo $p_id; ?>" role="button" class="like"><i class="far fa-thumbs-up"></i></a>
              <?php
              $u = $_SESSION["user_id"];
              $sq1 = "SELECT * FROM likes WHERE user_id = $u AND post_id = {$p_id}";
              if ($result = mysqli_query($conn, $sq1)) {
                $num_rows = mysqli_num_rows($result);
              }
              if ($num_rows >= 1) {
              ?>
                <style>
                  .like {
                    display: none;
                  }
                </style>
                <a href="./unlike_post.php?id=<?php echo $p_id; ?>" role="button" class="unlike"><i class="fas fa-thumbs-up"></i></a>
              <?php
              } else {
              ?>
                <style>
                  .unlike {
                    display: none;
                  }
                </style>

              <?php
              }
              ?>
            </div>



            <!-- DISLIKE BUTTON -->

            <div class="dislikebutton">
              <a href="./dislike_post.php?id=<?php echo $p_id; ?>" role="button" class="dislike"><i class="far fa-thumbs-down"></i></a>
              <?php
              $u = $_SESSION["user_id"];
              $sq1 = "SELECT * FROM dislikes WHERE user_id = $u AND post_id = {$p_id}";
              if ($result = mysqli_query($conn, $sq1)) {
                $num_rows = mysqli_num_rows($result);
              }
              if ($num_rows >= 1) {
              ?>
                <style>
                  .dislike {
                    display: none;
                  }
                </style>
                <a href="./undislikes_post.php?id=<?php echo $p_id; ?>" role="button" class="undislike"><i class="fas fa-thumbs-down"></i></a>
              <?php
              } else {
              ?>
                <style>
                  .undislike {
                    display: none;
                  }
                </style>

              <?php
              }
              ?>



            </div>




            <!-- bookmark -->
            <div class="bookmarkbutton">
              <a href="./save_post.php?id=<?php echo $p_id; ?>" role="button" class="save"><i class="far fa-bookmark fa-xs"></i></a>
              <?php
              $u = $_SESSION["user_id"];
              $sq1 = "SELECT * FROM saved WHERE user_id = $u AND post_id = $p_id";
              if ($result = mysqli_query($conn, $sq1)) {
                $num_rows = mysqli_num_rows($result);
              }
              if ($num_rows >= 1) {
              ?>
                <style>
                  .save {
                    display: none;
                  }
                </style>
                <a href="./unsave_post.php?id=<?php echo $p_id; ?>" role="button" class="unsave"><i class="fas fa-bookmark fa-xs"></i></a>

              <?php
              }
              ?>

            </div>




            <div class="col-lg-2"></div>

          </div>
        </div>
      </div>
    <?php
    }
    ?>


    <br><br>
    <!-- Comment feature -->

    <div class="container comment-tab inp">
      <div class="row">
        <div class="col-lg-1 user-avatar">
          <img src="uploads/<?php echo $_SESSION['pic']; ?>" width="80px" viewBox="0 0 16 16" class="bi bi-person-square" fill="currentColor" />
        </div>
        <div class="col-lg-9 comment-details">
          <h4 class="username"><?php echo $_SESSION['user']; ?></h4>

          <form action="./comment.php?id=<?php echo $p_id; ?>" method="post">

            <textarea name="comment" id="txtar" class='btn btn-lg' placeholder="Add a comment"></textarea>
            <div style="text-align: center;"><input type="submit" name="submit" role="button" value="POST" /></div>

          </form>

        </div>
      </div>
    </div>


    <!-- <div>
      <form action="./comment.php?id=<?php echo $p_id; ?>" method="post">
        <textarea name="comment" id="txtar" class='btn btn-lg'></textarea>
        <input type="submit" name="submit" role="button" value="POST" />

      </form>

    </div> -->


    <br><br>
    <?php

    $sql = "select * from reviews where post_id='$p_id' order by rev_id DESC";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 0) {
      echo '<h4 align="center" class="username">No Comments have been posted Yet</h4>';
    }
    while ($row = mysqli_fetch_assoc($result)) {
      $post_id = $row['post_id'];
      $user_id = $row['user_id'];
      $comment = $row['comment'];
      $date = $row['comm_date'];

      $sql1 = "select * from users where user_id='{$user_id}'";
      $result1 = mysqli_query($conn, $sql1);
      while ($row1 = mysqli_fetch_assoc($result1)) {
        $name = $row1['user'];
        $image = $row1['pic'];
      }
    ?>
      <div class="container comment-tab">
        <div class="row">
          <div class="col-lg-1 user-avatar">
            <img src="uploads/<?php echo $image; ?>" width="80px" viewBox="0 0 16 16" class="bi bi-person-square" fill="currentColor" />
          </div>
          <div class="col-lg-9 comment-details">
            <h4 class="username"><?php echo $name; ?></h4>
            <p class="comment"><?php echo $comment; ?></p>
            <span class="time"><?php echo $date; ?></span>
          </div>
        </div>
      </div>
    <?php


    }
    ?>




    <!-- <div class="row pt-5 pt-lg-0">
            <div class="col-1 col-lg-2"></div>
            <div class="col-10 col-lg-8 d-flex justify-content-lg-end justify-content-center">            
              <h5>Share</h5><i class="fi-xwlux2-share-wide"></i>
              <a href="#"><i class="fi-snsux2-instagram ml-3" style="color: #E1306C"></i></a>
              <a href="#"><i class="fi-snsux2-facebook ml-3" style="color: #04349A"></i></a>
              <a href="#"><i class="fi-snsux2-twitter ml-3" style="color: #7BCBFF"></i></a>
              <a href="#"><i class="fi-xnsux2-whatsapp ml-3" style="color: #128C7E"></i></a>
              <a href="#"><i class="fi-xwlux2-copy-wide ml-3" style="color: #000"></i></a>

              
            </div>
            <div class="col-1 col-lg-2"></div>
          </div> -->



  </section>

  <section class="contain2 mt-5" id="latest">
    <h3 class="display-4 pl-5 pl-md-5" style="font-weight: bold; font-family: 'Texturina', serif;">Related Articles <i class="fi-cnlrxm-chevron-solid"></i></h3>
    <div class="mt-5" style="background: rgba(233, 173, 120, 0.46);">
      <div class="container pt-5 pb-4">
        <div class="row mx-0 d-flex align-items-between justify-content-between">

          <div class="col-lg-3 col-sm-5 col-11 text-white">
            <div class="card" style="width: 100%; height: 90%;">
              <img class="card-img-top" src="./assests/scene.jpg" alt="Card image cap">
              <div class="card-body card-ki-body">
                <h5 class="card-text text-center"><a href="#">“Antim Daan”(The Last Donation)</a></h5>

              </div>
              <p class="card-text text-center"><a href="#">By Samriddhi</a></p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-5 col-11 text-white">
            <div class="card" style="width: 100%; height: 90%;">
              <img class="card-img-top" src="./assests/wheel.jpg" alt="Card image cap">
              <div class="card-body card-ki-body">
                <h5 class="card-text text-center"><a href="#">Article Title</a></h5>

              </div>
              <p class="card-text text-center"><a href="#">By XYZ</a></p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-5 col-11 text-white">
            <div class="card" style="width: 100%; height: 90%;">
              <img class="card-img-top" src="./assests/fort-2.jpg" alt="Card image cap">
              <div class="card-body card-ki-body">
                <h5 class="card-text text-center"><a href="#">Article Title</a></h5>

              </div>
              <p class="card-text text-center"><a href="#">By XYZ</a></p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-5 col-11 text-white">
            <div class="card" style="width: 100%; height: 90%;">
              <img class="card-img-top" src="./assests/building2.jpg" alt="Card image cap">
              <div class="card-body card-ki-body">
                <h5 class="card-text text-center"><a href="#">Article Title</a></h5>

              </div>
              <p class="card-text text-center"><a href="#">By XYZ</a></p>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>


  <div class="mt-5" id="joinus">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-5 m-5" style="border-right: 3px solid #511616">
          <h2 class="display-4 text-fill text-center" style="font-weight: 700; padding-top: 5%;">JOIN US</h2>
          <p class="text-fill text-center">Mail us your articles at:</p>
          <p class="text-fill text-center" style="color: #511616">samriddhidwivedi07@gmail.com</p>

          <div class="row justify-content-center">
            <div class="col-2 mr-0">
              <a class="btn" href="https://www.instagram.com/samriddhi_dwivedi/" style="background-color:#FFE8D4; color:#511616; border-radius: 25%;"><i class="fi-xwsux2-instagram"></i></a>
            </div>
            <!-- <div class="col-2">
              <a class="btn" href="#" style="background-color:#FFE8D4; color:#511616; border-radius: 25%;">
                <i class="fi-cwlux2-facebook-circle"></i></a>
            </div> -->
            <div class="col-2">
              <a class="btn" href="https://www.linkedin.com/in/samriddhi-dwivedi-3979b4144/" style="background-color:#FFE8D4; color:#511616; border-radius: 25%;">
                <i class="fi-snlux2-linkedin"></i></a>
            </div>
            <div class="col-2">
              <a class="btn" href="https://twitter.com/Samriddhi0711" style="background-color:#FFE8D4; color:#511616; border-radius: 25%;">
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
              <input type="submit" id="submit" class="btn" value="SUBMIT">
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
  </div>

  <script type="text/javascript">
    $(window).scroll(function() {
      $('nav').toggleClass('scrolled', $(this).scrollTop() > 300);
      var scroll = $(window).scrollTop();

    });
  </script>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>