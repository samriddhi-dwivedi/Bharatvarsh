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

  <!-- Anime -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

  <script src="https://unpkg.com/scrollreveal"></script>

  <script defer src="https://friconix.com/cdn/friconix.js"> </script>

  <title>Category</title>
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

  <section class="container cov">
    <?php if ($class == "people") { ?>


      <style>
        .cov {
          background: linear-gradient(180deg, rgba(255, 255, 255, 0) 85%, #fff1e5 100%),
            url("./assests/ppl.jpg") no-repeat;
          background-size: cover;
          margin-top: 65px;
          border-radius: 20px;
        }

        .amita {
          color: white;
        }
      </style>
    <?php
    } ?>

    <?php if ($class == "places") { ?>


      <style>
        .cov {
          background: linear-gradient(180deg, rgba(255, 255, 255, 0) 85%, #fff1e5 100%),
            url("./css/monu.jpg") no-repeat center;
          background-size: cover;
          margin-top: 65px;
          border-radius: 20px;
        }
      </style>
    <?php
    } ?>

    <?php if ($class == "food") { ?>


      <style>
        .cov {
          background: linear-gradient(180deg, rgba(255, 255, 255, 0) 85%, #fff1e5 100%),
            url("./assests/fooood.jpg") no-repeat;
          background-size: cover;
          margin-top: 65px;
          border-radius: 20px;
        }

        .amita {
          color: white;
        }
      </style>
    <?php
    } ?>

    <?php if ($class == "insights") { ?>


      <style>
        .cov {
          background: linear-gradient(180deg, rgba(255, 255, 255, 0) 85%, #fff1e5 100%),
            url("./assests/ujjain.jpg") no-repeat;
          background-size: cover;
          margin-top: 65px;
          border-radius: 20px;
        }

        .amita {
          color: white;
        }
      </style>
    <?php
    } ?>
    <div style="padding-top:130px;overflow-y: hidden;">
      <div id="home" style="opacity: 0.75;" class="jumb container mt-0">
        <h1 class="text-center amita ml6 "><span class="text-wrapper">
            <span class="letters"><?php echo $class; ?></span>
          </span></h1>


      </div>
    </div>
    <div style="padding-top: 2vw;">
      <div id="history" style="opacity: 0.75;" class="jumb container mt-0">
        <div class="row mt-0">
          <div class="col-1"></div>
          <div class="col-10 d-flex justify-content-center ccc">
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
      <div class="row" style="overflow-y: hidden;">

        <?php if ($class == "people") { ?>

          <div class="col-lg-6 abt-1"><img src="./assests/wom.jpg" width="100%" height="100%"></div>



        <?php
        } ?>

        <?php if ($class == "places") { ?>

          <div class="col-lg-6 abt-1"><img src="./assests/house.jpg" width="100%" height="100%"></div>



        <?php
        } ?>

        <?php if ($class == "food") { ?>

          <div class="col-lg-6 abt-1"><img src="./assests/f.jpg" width="100%" height="100%"></div>



        <?php
        } ?>

        <?php if ($class == "insights") { ?>

          <div class="col-lg-6 abt-1"><img src="./assests/sadhu.jpg" width="100%" height="100%"></div>



        <?php
        } ?>


        <div class="col-lg-6 abt-2" style="overflow-y: hidden;"><?php if ($class == "people") { ?>

            India is a hierarchical society. Within India’s culture and customs-whether in the north, south, east or west-whether in Hindu, Muslim or other communities-whether in rural or urban areas, virtually all things, people and groups of people are ranked according to certain essential attributes. If one is attuned to the theme of hierarchy in India, one can discuss its manifestations everywhere. Although India is the biggest democracy in the world, yet in daily life the notions of equality are not present.


            Castes, ethnic groups with which all the Indians are associated are also ranked. Within most cities, towns and villages, everyone knows the relative rankings of each locally represented caste. People’s behaviour towards one another is primarily shaped by this knowledge.

            There is even disagreement at times, between the people of extremes of very high and very low castes.



          <?php
                                                                } ?>



          <?php if ($class == "places") { ?>

            India is one of the popular tourist destinations in Asia. India has fascinated people from all over the world with her secularism and her culture. Hence, India is a country with a great potential for tourism. Bounded by the Himalayan ranges in the north and surrounded, on three sides by sea (Arabian sea, Bay of Bengal and Indian Ocean), India offers a wide array of places to see and things to do. The enchanting backwaters, hill stations and landscapes make India a beautiful country.

            There are historical monuments, beaches, places of religious interests, hill resorts, etc. that attract tourists. Every region is identified with its handicraft, fairs, folk dances, music and its people. Tourism is the second largest foreign exchange earner in India. The tourism industry employs a large number of people, both skilled and unskilled. It promotes national integration and international brotherhood.




          <?php
          } ?>

          <?php if ($class == "food") { ?>

            Indian food is different from rest of the world not only in taste but also in cooking methods. It reflects a perfect blend of various cultures and ages. Just like Indian culture, food in India has also been influenced by various civilizations, which have contributed their share in its overall development and the present form.

            Foods of India are better known for its spiciness. Throughout India, be it North India or South India, spices are used generously in food. But one must not forget that every single spice used in Indian dishes carries some or the other nutritional as well as medicinal properties.


            Food in the north India, to begin with, Kashmiri cuisines reflect strong Central Asian influences. In Kashmir, mostly all the dishes are prepared around the main course of rice found abundantly in the beautiful valley. Another delicious item cooked here is the ‘Saag‘ that is prepared with a green leafy vegetable known as the ‘Hak‘.

            But on the other hand states like the Punjab, Haryana and Uttar Pradesh show high consumption of chapatis as staple food.




          <?php
          } ?>

          <?php if ($class == "insights") { ?>

            Mahatma Gandhi once said, “Whatever else India may not be, she is at least one thing. She is the greatest storehouse of spiritual knowledge.” The remarks are very appropriate because the word ‘spiritual’ strikes immediately when one thinks of India.


            India is certainly a country that provides the ground for saturating one’s senses by the touch of the being called supernatural power. Through the ages-from the ancient past-India has amalgamated the wealth of knowledge in the form of holy vedas and scriptures and has emerged as the spiritual lighthouse for the world.

            India’s other name Bharat Varsha-the land of Bharata was taken after a king famous in Puranic tradition. The name India was applied by the Greeks. It corresponds to the Hindu of the Old Persian epigraphs. Like Sapta Sindhaah and “Hapta Hindu”-the appelations of the Aryan country in the Vedas- it is derived from Sindu, which in turn was taken from Indus, the great river that was the cradle of one of the earliest known civilisations.





          <?php
          } ?>
        </div>
      </div>
    </div>





  </section>

  <section class="contain2 mt-5" id="latest">
    <h3 class="display-4 pl-5 pl-md-5" style="font-weight: bold; font-family: 'Texturina', serif;">All Articles<i class="fi-cnlrxm-chevron-solid"></i></h3>
    <div class="mt-5" style="background: rgba(233, 173, 120, 0.46);box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.18);">
      <div class="container pt-5 pb-4 ccc">
        <div class="row ">

          <?php
          $class = $_GET['class'];
          $sql = "select * from posts WHERE approval=1 and class='{$class}' ORDER BY post_id DESC";
          $result = mysqli_query($conn, $sql) or die("Query Failed");
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

          <?php
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