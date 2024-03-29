<?php
include "./config.php";

session_start();

$class = $_GET['class'];

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

  <title>Category</title>
  <style type="text/css">

  </style>
</head>

<body>
  <header style="overflow-y: hidden;">
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top" style="overflow-y: hidden;">
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
            <a class="nav-link mr-3 x" href="#joinus">About<span class="sr-only">(current)</span></a>
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

  <section class="contain-cat">
    <div style="padding-top:130px;overflow-y: hidden;">
      <div id="home" style="opacity: 0.75;" class="jumb container mt-0">

        <h1 class="text-center amita"><?php echo $class; ?></h1>

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


  <h3 class="display-4 pl-5 pl-md-5" style="font-weight: bold;background-color: white;margin-top: 100px;margin-bottom: 20px;">About <i class="fi-cnlrxm-chevron-solid"></i></h3>

  <section style="background: rgba(233, 173, 120, 0.46);margin-bottom: 250px; padding: 50px;">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 abt-1"><img src="./assests/about.jpg" width="100%" height="100%"></div>
        <div class="col-lg-6 abt-2">Described as the fertile crescent, India has thus been the source of inspiration for the world by virtue of her rich cultural heritage. The earliest name of India was ‘Bharatvarsha’. A few historians say that this name is derived from the Bhatara tribes that inhabited the land. But everybody knows that it is named after Bharata, the mighty son of king Dushyanta and his queen Sakuntala. Bharatavarsha (the land of Bharata), the ancient name of India, is also mentioned in the preamble of the constitution of India.Over the centuries, there has been a significant fusion of cultures between Buddhists, Hindus, Muslims, Jains, Sikhs and various tribal populations in India. India is the birthplace of Hinduism, Buddhism, Jainism, Sikhism, and other religions
        </div>
      </div>
    </div>





  </section>

  <section class="contain2 mt-5" id="latest">
    <h3 class="display-4 pl-5 pl-md-5" style="font-weight: bold; font-family: 'Texturina', serif;">All Articles<i class="fi-cnlrxm-chevron-solid"></i></h3>
    <div class="mt-5" style="background: rgba(233, 173, 120, 0.46);">
      <div class="container pt-5 pb-4">
        <div class="row ">

          <?php
          $class = $_GET['class'];
          $sql = "select * from posts WHERE approval=1 and class='{$class}' ORDER BY post_id DESC";
          $result = mysqli_query($conn, $sql) or die("Query Failed");
          $num = mysqli_num_rows($result);
          if ($num == 0) {
            echo '<h4 align="center" class="card card-title">No Content have been Saved Yet</h4>';
          }

          while ($rows = mysqli_fetch_assoc($result)) {
            $title = $rows['title'];
            $readtime = $rows['readtime'];
            $content = $rows['content'];
            $image = $rows['image'];
            $user_id = $rows['user_id'];

          ?>


            <div class="col-lg-3 col-sm-5 col-11 text-white">
              <div class="card" style="width: 100%; height: 90%;">
                <img class="card-img-top" src="./uploads/<?php echo $image ?>" alt="Card image cap" height="240px">
                <div class="card-body card-ki-body">
                  <h5 class="card-text text-center"><a href="./articlepg.php?id=<?php echo $rows['post_id']; ?>"><?php echo $title ?></a></h5>

                </div>
                <p class="card-text text-center"><a href="#">By

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
      $('nav').toggleClass('scrolled', $(this).scrollTop() > 200);

      $('.x').toggleClass('scrolled', $(this).scrollTop() > 850);
      $('.x').toggleClass('ret', $(this).scrollTop() > 1800);


      $('.x1').toggleClass('scrolled', $(this).scrollTop() > 1800);
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



</body>

</html>