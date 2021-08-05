<?php

//index.php

//Include Configuration File
include('google_config.php');

$login_button = '';


if (isset($_GET["code"])) {

  $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


  if (!isset($token['error'])) {

    $google_client->setAccessToken($token['access_token']);


    $_SESSION['access_token'] = $token['access_token'];


    $google_service = new Google_Service_Oauth2($google_client);


    $data = $google_service->userinfo->get();


    if (!empty($data['given_name'])) {
      $_SESSION['user'] = $data['given_name'];
    }

    if (!empty($data['given_name'])) {
      $_SESSION['username'] = $data['given_name'];
    }



    if (!empty($data['email'])) {
      $_SESSION['email'] = $data['email'];
    }



    if (!empty($data['picture'])) {
      $_SESSION['pic'] = $data['picture'];
    }
  }
}


if (!isset($_SESSION['access_token'])) {

  $login_button = '<a href="' . $google_client->createAuthUrl() . '">Login With Google</a>';
}

?>



<?php

include "./config.php";



?>
<?php
if (isset($_SESSION['email'])) {
  $alpha = $_SESSION['email'];
  $sql1 = "SELECT * FROM users WHERE email='$alpha'";
  $res = mysqli_query($conn, $sql1) or die("query fail");
  $a = $_SESSION['user'];
  $b = $_SESSION['username'];
  $c = $_SESSION['email'];
  $d = $_SESSION['pic'];
  if (mysqli_num_rows($res) == 0) {
    $sql = "insert into users(username, user,pic, email) values ('$a','$b','$d','$c')";
    mysqli_query($conn, $sql);
  }
  $alpha = $_SESSION['email'];
  $sql2 = "SELECT * FROM users WHERE email='$alpha'";
  $res = mysqli_query($conn, $sql2) or die("query fail");
  while ($rows = mysqli_fetch_assoc($res)) {
    $i = $rows['user_id'];
  }
  $_SESSION['user_id'] = $i;
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


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Slick -->
  <link rel="stylesheet" type="text/css" href="slick/slick.css" />

  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Icons -->
  <script src="https://kit.fontawesome.com/54ad1eac8d.js" crossorigin="anonymous"></script>


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
  <script defer src="https://friconix.com/cdn/friconix.js"> </script>

  <title>HOME</title>
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
            <a class="nav-link mr-3 h" href="#s1">Home<span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active">
            <a class="nav-link mr-3 x" href="#s2">About<span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active">
            <a class="nav-link mr-3 x1" href="#s3">Latest<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link mr-3 x2" href="#s4">Popular<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link mr-3 x3" href="#s5">Contact Us<span class="sr-only">(current)</span></a>
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
  <h2 id="s1"></h2>


  <section class="contain" style="margin:40px;margin-top:65px;border-radius: 20px;">
    <div style="padding-top: 2vw;margin-top: 20px;">
      <div id="home" style="opacity: 0.9;" class="jumb container mt-0 headingg">

        <h1 class="text-center amita ml6 " style="margin-top:10px;"><span class="text-wrapper">
            <span class="letters">Explore The Beauty &nbsp; Of &nbsp;Bharatvarsh </span>
          </span></h1>

      </div>
    </div>
    <div class="container taj">
      <div class="row justify-content-between align-items-center">

        <div class="col-lg-3 col-6 d-flex justify-content-center pb-3 pb-lg-0 ppl">
          <div class="card mainsec">
            <img class="card-img-top categ" src="./assests/people.jpg" alt="Card image cap" height="250px">
            <div class="card-body">
              <a href="category.php?class=people">
                <h5 class="card-text">People</h5>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-6 d-flex justify-content-center plc">
          <div class="card mainsec">
            <img class="card-img-top categ" src="./assests/places.jpg" alt="Card image cap" height="250px">
            <div class="card-body">
              <a href="category.php?class=places">
                <h5 class="card-text">Places</h5>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6 d-flex justify-content-center foo">
          <div class="card mainsec">
            <img class="card-img-top categ mobile" src="./assests/food.jpg" alt="Card image cap" height="250px">
            <div class="card-body">
              <a href="category.php?class=food">
                <h5 class="card-text">Food</h5>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6 d-flex justify-content-center pb-3 pb-lg-0 ins">
          <div class="card mainsec">
            <img class="card-img-top categ" src="./assests/insights.jpg" alt="Card image cap" height="250px">
            <div class="card-body">
              <a href="category.php?class=insights">
                <h5 class="card-text">Insights</h5>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <h2 id="s2"></h2>


  <h3 class="display-4 pl-5 pl-md-5" style="font-weight: bold;background-color: white;margin-top: 100px;margin-bottom: 20px;">About <i class="fi-cnlrxm-chevron-solid"></i></h3>

  <section style="background: rgba(233, 173, 120, 0.46);margin-bottom: 250px; padding: 50px;box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.18);">

    <div class="container">
      <div class="row" style="overflow-y: hidden;">
        <div class="col-lg-6 abt-1"><img src="./assests/about.jpg" width="100%" height="100%"></div>
        <div class="col-lg-6 abt-2">Described as the fertile crescent, India has thus been the source of inspiration for the world by virtue of her rich cultural heritage. The earliest name of India was ‘Bharatvarsha’. A few historians say that this name is derived from the Bhatara tribes that inhabited the land. But everybody knows that it is named after Bharata, the mighty son of king Dushyanta and his queen Sakuntala. Bharatavarsha (the land of Bharata), the ancient name of India, is also mentioned in the preamble of the constitution of India.Over the centuries, there has been a significant fusion of cultures between Buddhists, Hindus, Muslims, Jains, Sikhs and various tribal populations in India. India is the birthplace of Hinduism, Buddhism, Jainism, Sikhism, and other religions.India represents “Unity in Diversity” . Our country is a mixture of cultures, regions, traditions, diversity in food, languages, etc. Our people of India are so polite, understanding and helping in nature. The national bird of India is Peacock and is very beautiful. India is so incredible and is full of colors and has the tiger as its national animal, hockey as its national game, etc. the national language or mother tongue of our country is Hindi.
        </div>
      </div>

    </div>
    <h2 id="s3"></h2>
  </section>





  <section class="contain2 mt-5 lu" id="latest">


    <h3 class="display-4 pl-5 pl-md-5" style="font-weight: bold;">Latest Updates <i class="fi-cnlrxm-chevron-solid"></i></h3>
    <div class="mt-5" style="background: rgba(233, 173, 120, 0.46);overflow-y:hidden;box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.18);">
      <div class="container-fluid pt-5 pb-5" style="overflow-y: hidden;">

        <i class="fas fa-chevron-left pre"></i>
        <i class="fas fa-chevron-right nex"></i>

        <div class="row mx-0 d-flex align-items-between justify-content-between cont ccc" style="padding-bottom: 60px;overflow-y:hidden;">


          <?php
          $i = 0;
          $sql = "select * from posts WHERE approval=1 ORDER BY post_id DESC";
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
                  <h5 class="card-text text-center" style="font-size: 25px !important;"><a href="./articlepg.php?id=<?php echo $rows['post_id']; ?>"><?php echo $title ?></a></h5>

                </div>
                <?php

                $sql1 = "SELECT user FROM users WHERE user_id={$user_id}";
                $result2 = mysqli_query($conn, $sql1) or die("Query Failed");
                $row = mysqli_fetch_assoc($result2);
                $user = $row['user'];


                ?>
                <p class="card-text text-center" style="font-size: 20px !important;"><a href="./profile.php?user=<?php echo $user ?>">By

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
    <h2 id="s4"></h2>
  </section>




  <section class="contain2 mt-5 mp" id="popular">
    <h3 class="display-4 pl-5 pl-md-5" style="font-weight: bold;">Most Popular <i class="fi-cnlrxm-chevron-solid"></i></h3>
    <div class="mt-5" style="background: rgba(233, 173, 120, 0.46);box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.18);">
      <div class="container-fluid pt-5 pb-5" style="overflow-y: hidden;">

        <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i>

        <div class="row mx-0 d-flex align-items-between justify-content-between cont2 ddd" style="padding-bottom: 60px;overflow-y: hidden;">


          <?php
          $j = 0;
          $sql = "select * from posts WHERE approval=1 ORDER BY likes DESC";
          $result = mysqli_query($conn, $sql) or die("Query Failed");

          while ($rows = mysqli_fetch_assoc($result)) {
            $j++;
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
                  <h5 class="card-text text-center" style="font-size: 25px !important;"><a href="./articlepg.php?id=<?php echo $rows['post_id']; ?>"><?php echo $title ?></a></h5>

                </div>
                <p class="card-text text-center" style="font-size: 20px !important;"><a href="./profile.php?user=<?php echo $user ?>">By

                    <?php

                    $sql1 = "SELECT user FROM users WHERE user_id={$user_id}";
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

          ?>








        </div>


      </div>
    </div>
  </section>







  <section class="contain2 mt-5 mp" id="popular">
    <h3 class="display-4 pl-5 pl-md-5" style="font-weight: bold;">All Blogs <i class="fi-cnlrxm-chevron-solid"></i></h3>
    <div class="mt-5" style="background: rgba(233, 173, 120, 0.46);box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.18);">
      <div class="container-fluid pt-5 pb-5" style="overflow-y: hidden;">

        <div class="row mx-0 ddd" style="padding-bottom: 60px;overflow-y: hidden;">


          <?php
          $j = 0;
          $blogcount = 0;
          $sql = "select * from posts WHERE approval=1 ORDER BY likes DESC";
          $result = mysqli_query($conn, $sql) or die("Query Failed");

          while ($rows = mysqli_fetch_assoc($result)) {
            $j++;
            $blogcount++;
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
                  <h5 class="card-text text-center" style="font-size: 25px !important;"><a href="./articlepg.php?id=<?php echo $rows['post_id']; ?>"><?php echo $title ?></a></h5>

                </div>
                <p class="card-text text-center" style="font-size: 20px !important;"><a href="./profile.php?user=<?php echo $user ?>">By

                    <?php

                    $sql1 = "SELECT user FROM users WHERE user_id={$user_id}";
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

          ?>








        </div>


      </div>
    </div>
  </section>






  <h2 id="s5"></h2><br>
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
        <div class="col-sm-12 col-lg-5 ml-5 mt-5" style="overflow-y: hidden;">
          <form style="overflow-y: hidden;">
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




  <script type="text/javascript">
    $(window).scroll(function() {
      $('nav').toggleClass('scrolled', $(this).scrollTop() > 200);

      $('.x').toggleClass('scrolled', $(this).scrollTop() > 850);
      $('.x').toggleClass('ret', $(this).scrollTop() > 1700);


      $('.x1').toggleClass('scrolled', $(this).scrollTop() > 1700);
      $('.x1').toggleClass('ret', $(this).scrollTop() > 2600);

      $('.x2').toggleClass('scrolled', $(this).scrollTop() > 2600);
      $('.x2').toggleClass('ret', $(this).scrollTop() > 3400);

      $('.x3').toggleClass('scrolled', $(this).scrollTop() > 3400);


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
        autoplaySpeed: 2000,
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
  } else {
  ?>

    <script type="text/javascript">
      $(".cont").slick({
        dots: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 2000,
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












  <?php
  if ($j < 4) {
  ?>

    <script type="text/javascript">
      $(".cont2").slick({
        dots: true,
        slidesToShow: <?php echo $j; ?>,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: $(".next"),
        prevArrow: $(".prev"),
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: <?php echo $j; ?>,
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
  } else {
  ?>

    <script type="text/javascript">
      $(".cont2").slick({
        dots: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: $(".next"),
        prevArrow: $(".prev"),
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <script src="./js/index.js" type="text/javascript"></script>

</body>

</html>