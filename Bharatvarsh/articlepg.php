<?php
include "./config.php";

session_start();



$p_id = $_GET['id'];
$sql = "SELECT * FROM posts WHERE post_id={$p_id} ";
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
  $date = $row['date'];
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


  <!-- Slick -->
  <link rel="stylesheet" type="text/css" href="slick/slick.css" />

  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Icons -->
  <script src="https://kit.fontawesome.com/54ad1eac8d.js" crossorigin="anonymous"></script>

  <!-- Anime -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>

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






  <title> Article</title>

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

  <section class="mainsection">
    <h1 class="display-3 text-center ml6" style="padding-top: 13vw; font-weight:400;"><span class="text-wrapper">
        <span class="letters"><?php echo $title ?></span>
      </span></h1>
    <div class="row pt-5">
      <div class="col-6 d-flex justify-content-center author">
        <i class="fi-xnsux3-user-solid"></i>
        <?php echo $user ?><br><?php echo $date; ?>
      </div>
      <div class="col-6 text-center read"><?php echo $readtime ?> Min Read
      </div>


    </div>

    <div class="row imgg">
      <div class="col-2"></div>
      <div class="col-8 d-flex justify-content-center">
        <img src="./uploads/<?php echo $image; ?>" class="img-fluid mt-4">
      </div>
      <div class="col-2"></div>
    </div>

    <div class="row mt-5 conntt">
      <div class="col-lg-2 col-1"></div>
      <div class="col-lg-8 col-10 d-flex justify-content-center">
        <p class="text-justify" style="font-size: 1.25rem;"><?php echo nl2br($content) . "\n"; ?>

        </p>
        <hr>
      </div>
      <div class="col-lg-2 col-1"></div>
    </div>


    <?php
    if (!isset($_SESSION['user_id'])) {

    ?>
      <div class="container-fluid lcs">
        <div class="row">

          <div class="col-lg-2"></div>

          <div class="col-lg-8" style="overflow-y: hidden;">

            <!-- LIKE BUTTON -->

            <div class="likebutton" style="overflow-y: hidden;">
              <a href="./like_post.php?id=<?php echo $p_id; ?>" role="button" class="like"><i class="far fa-thumbs-up"></i></a>
              <?php

              if (isset($_COOKIE['liked'])) {
                if ($_COOKIE['liked'] == $p_id) {
              ?>
                  <style>
                    .like {
                      display: none;
                    }
                  </style>
                  <a href="./unlike_post.php?id=<?php echo $p_id; ?>" role="button" class="unlike"><i class="fas fa-thumbs-up"></i></a>
                <?php
                }
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

            <!-- LIKE COUNT BUTTON -->

            <div class="dislikebutton">
              <div> Likes :
                <?php

                $sql = "SELECT likes FROM posts WHERE post_id={$p_id}";
                $result = mysqli_query($conn, $sql);
                while ($rows = mysqli_fetch_assoc($result)) {
                  $likes = $rows['likes'];
                }

                echo $likes;

                ?>



              </div>

            </div>

            <!-- bookmark -->
            <div class="bookmarkbutton" style="overflow-y: hidden;">
              <a href="./login.php" role="button" class="save" style="overflow-y: hidden;"><i class="far fa-bookmark fa-xs"></i></a>




            </div>

          </div>




          <div class="col-lg-2"></div>

        </div>
      </div>
      </div>


      <br><br><br>


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
          $pass = $row1['password'];
        }
      ?>
        <div class="container comment-tab">
          <div class="row">
            <div class="col-lg-1 user-avatar">
              <?php
              if ($pass) { ?>
                <img src="uploads/<?php echo $image; ?>" width="80px" viewBox="0 0 16 16" class="bi bi-person-square commsq" fill="currentColor" />
              <?php } else {
                $im = $image;
                $imageData = base64_encode(file_get_contents($im));
                echo '<img src="data:image/jpeg;base64,' . $imageData . '"  width="80px" viewBox="0 0 16 16" class="bi bi-person-square commsq" fill="currentColor" >';
              }
              ?>
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


    <?php
    }
    ?>


    <br>






    <!--Adding condition, that if the admin sees the post for approval he doesn't see the like comment and save buttons -->
    <?php
    if (isset($_SESSION['user_id'])) {
      if ($_SESSION['username'] != 'admin') {
    ?>
        <div class="container-fluid">
          <div class="row">

            <div class="col-lg-2"></div>

            <div class="col-lg-8" style="overflow-y: hidden;">



              <!-- LIKE BUTTON -->

              <div class="likebutton" style="overflow-y: hidden;">
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
              <!-- LIKE COUNT BUTTON -->

              <div class="dislikebutton">
                <div> Likes :
                  <?php

                  $sql = "SELECT likes FROM posts WHERE post_id={$p_id}";
                  $result = mysqli_query($conn, $sql);
                  while ($rows = mysqli_fetch_assoc($result)) {
                    $likes = $rows['likes'];
                  }

                  echo $likes;

                  ?>



                </div>

              </div>










              <!-- bookmark -->
              <div class="bookmarkbutton" style="overflow-y: hidden;">
                <a href="./save_post.php?id=<?php echo $p_id; ?>" role="button" class="save" style="overflow-y: hidden;"><i class="far fa-bookmark fa-xs"></i></a>
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





        <br><br>
        <!-- Comment feature -->

        <div class="container comment-tab inp">
          <div class="row">
            <div class="col-lg-1 user-avatar">
              <?php
              if (isset($_SESSION['password'])) { ?>
                <img src="uploads/<?php echo $_SESSION['pic']; ?>" width="80px" viewBox="0 0 16 16" class="bi bi-person-square addcommpic" fill="currentColor" />


              <?php } else {
                $image = $_SESSION['pic'];
                $imageData = base64_encode(file_get_contents($image));
                echo '<img src="data:image/jpeg;base64,' . $imageData . '" width="80px" viewBox="0 0 16 16" class="bi bi-person-square addcommpic" fill="currentColor" >';
              }
              ?>


            </div>
            <div class="col-lg-9 comment-details uss">
              <h4 class="username"><?php echo $_SESSION['user']; ?></h4>

              <form action="./comment.php?id=<?php echo $p_id; ?>" method="post">

                <textarea name="comment" id="txtar" class='btn btn-lg' placeholder="Add a comment" style="background-color: rgba(233, 173, 120, 0.46);border-radius:15px;"></textarea>
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
            $pass = $row1['password'];
          }
        ?>
          <div class="container comment-tab">
            <div class="row">
              <div class="col-lg-1 user-avatar">
                <?php
                if ($pass) { ?>
                  <img src="uploads/<?php echo $image; ?>" width="80px" viewBox="0 0 16 16" class="bi bi-person-square commsq" fill="currentColor" />
                <?php } else {
                  $im = $image;
                  $imageData = base64_encode(file_get_contents($im));
                  echo '<img src="data:image/jpeg;base64,' . $imageData . '"  width="80px" viewBox="0 0 16 16" class="bi bi-person-square commsq" fill="currentColor" >';
                }
                ?>
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
      }
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

    <?php

    if (isset($_SESSION['user_id'])) {
      if ($_SESSION['username'] == 'admin') {


        $sql = "select * from posts WHERE post_id={$p_id}";
        $result = mysqli_query($conn, $sql) or die("Query Failed");
        while ($row = mysqli_fetch_assoc($result)) {
          $approval = $row['approval'];
          if ($approval == 0) {

    ?>

            <br><br><br>
            <p style="text-align: center;">
              <a href="./accept.php?id=<?php echo $p_id; ?>" class="btn btn btn-success">Accept</a>
              <a href="./delete.php?id=<?php echo $p_id; ?>" class="btn btn btn-danger">Reject</a>
            </p>

    <?php
          }
        }
      }
    }

    ?>






  </section>

  <section class="contain2 mt-5" id="latest">

    <h3 class="display-4 pl-5 pl-md-5" style="font-weight: bold;">Related <i class="fi-cnlrxm-chevron-solid"></i></h3>
    <div class="mt-5" style="background: rgba(233, 173, 120, 0.46);overflow-y:hidden;">
      <div class="container pt-5 pb-5" style="overflow-y: hidden;">

        <i class="fas fa-chevron-left pre"></i>
        <i class="fas fa-chevron-right nex"></i>

        <div class="row mx-0 d-flex align-items-between justify-content-between cont ccc" style="padding-bottom: 60px;overflow-y:hidden;">


          <?php
          $i = 0;
          $sql = "select * from posts WHERE approval=1 AND class='{$class}'  ORDER BY post_id DESC";
          $result = mysqli_query($conn, $sql) or die("Query Failed");

          while ($rows = mysqli_fetch_assoc($result)) {
            $i++;
            $title = $rows['title'];
            $readtime = $rows['readtime'];
            $content = $rows['content'];
            $image = $rows['image'];
            $user_id = $rows['user_id'];

          ?>


            <div class="col-lg-3 col-sm-5 col-11 text-white inl">
              <div class="card" style="width: 100%; height: 90%;">
                <img class="card-img-top" src="./uploads/<?php echo $image ?>" alt="Card image cap" height="240px">
                <div class="card-body card-ki-body">
                  <h5 class="card-text text-center"><a href="./articlepg.php?id=<?php echo $rows['post_id']; ?>"><?php echo $title ?></a></h5>

                </div>
                <?php

                $sql1 = "SELECT user FROM users WHERE user_id={$user_id}";
                $result2 = mysqli_query($conn, $sql1) or die("Query Failed");
                $row = mysqli_fetch_assoc($result2);
                $user = $row['user'];


                ?>
                <p class="card-text text-center"><a href="./profile.php?user=<?php echo $user ?>">By

                    <?php
                    echo $user;
                    ?>
                  </a></p>
              </div>
            </div>


          <?php
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
              <a class=" " href="https://www.instagram.com/samriddhi_dwivedi/" style=" border-radius: 25%;"><i class="fi-xwsux2-instagram"></i></a>
            </div>
            <!-- <div class="col-2">
              <a class="btn" href="#" style="background-color:#FFE8D4; color:#511616; border-radius: 25%;">
                <i class="fi-cwlux2-facebook-circle"></i></a>
            </div> -->
            <div class="col-4">
              <a class=" " href="https://www.linkedin.com/in/samriddhi-dwivedi-3979b4144/" style=" border-radius: 25%;">
                <i class="fi-snlux2-linkedin"></i></a>
            </div>
            <div class="col-4">
              <a class=" " href="https://twitter.com/Samriddhi0711" style="border-radius: 25%;">
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>


  <?php
  if ($i < 4) {
  ?>

    <script type="text/javascript">
      $(".cont").slick({
        dots: true,
        slidesToShow: <?php echo $i; ?>,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 1000,
        nextArrow: $(".nex"),
        prevArrow: $(".pre"),
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: <?php echo $i; ?>,
              slidesToScroll: 3,
              infinite: true,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            },
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ],
      });
    </script>

  <?php
  }
  if ($i == 1) {
  ?>

    <script type="text/javascript">
      $(".cont").slick({
        dots: true,
        slidesToShow: <?php echo $i; ?>,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 1000,
        nextArrow: $(".nex"),
        prevArrow: $(".pre"),
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: <?php echo $i; ?>,
              slidesToScroll: 3,
              infinite: true,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ],
      });
    </script>

  <?php

  } else {
  ?>

    <script type="text/javascript">
      $(".cont").slick({
        dots: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 1000,
        nextArrow: $(".nex"),
        prevArrow: $(".pre"),
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            },
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ],
      });
    </script>

  <?php
  }
  ?>
  <script src="./js/category.js" type="text/javascript"></script>

</body>

</html>