<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location:./login.php");
}


include "./config.php";

$user_id = $_SESSION['user_id'];
$title = $time = $blog = $pic = $class = "";
$title_err = $time_err = $blog_err = "";


if (isset($_POST['submit'])) {




    if (empty(trim($_POST['title']))) {
        echo "<script>alert('Title Cannot be left Blank !!')</script>";
        $title_err = "Title cannot be blank";
    } else {
        $title = $_POST['title'];
        $sql = "select * from posts where title = '{$title}'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            echo "<script>alert('This Blog Title Already Taken !!')</script>";
            $title_err = 'Error';
        }
    }

    if (empty(trim($_POST['time']))) {
        $time_err = "Read Time cannot be blank";
    } else {
        $time = trim($_POST['time']);
    }

    $class = $_POST['class'];

    if (empty(trim($_POST['blog']))) {
        $blog_err = "Blog cannot be blank";
    } else {
        $blog = mysqli_real_escape_string($conn, $_POST['blog']);
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





    if (empty($title_err) && empty($time_err) && empty($blog_err) && empty($pic_err)) {
        $sql = "insert into posts(user_id, class, title, readtime, content, approval,image,likes,dislikes,date) values ('$user_id','$class','$title','$time','$blog',0,'$pic',0,0,NOW())";
        mysqli_query($conn, $sql);
        if ($sql) {
            echo "<script>
alert('Your Blog has been submitted and is under review by our team. Once ,it gets verified , it will automatically be posted on the website. Keep Blogging !!');
window.location.href='index.php';
</script>";
        } else
            echo "<script>alert('Something went wrong..');";
    } else {
        echo "<script type=\"text/javascript\">alert('There's something wrong. Check your input again!')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">

    <!-- Main css -->
    <link rel="stylesheet" href="./css/post_blog.css">
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

    <!-- Anime -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
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


    <section style="background-color: white">
        <div class="container cov" style="margin-top:120px;">
            <div class="row cov">
                <div class="col-lg-12">


                    <form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" style="overflow-y:hidden;">
                        <h1 align="center" style="color: rgba(81, 22, 22, 1);">Write your Blog</h1>

                        <div class="mb-3 titl">
                            <label for="Name" class="form-label" style="color: rgba(81, 22, 22, 1);">Blog Title</label>
                            <input type="text" name="title" style="height:30px">
                        </div>

                        <div class="mb-3 timm">
                            <label for="time" class="form-label" style="color: rgba(81, 22, 22, 1);">Approx Read Time (in minutes)</label>
                            <input type="text" name="time" style="height:30px;">
                        </div>

                        <div class="mb-3 typ">
                            <label for="type" class="form-label" style="color: rgba(81, 22, 22, 1);">Blog Type</label>
                            <select name="class">
                                <option value="people">People</option>
                                <option value="places">Places</option>
                                <option value="food">Food</option>
                                <option value="insights">Insights</option>
                            </select>
                        </div>

                        <div class="mb-3 blo">
                            <label for="Name" class="form-label" style="color: rgba(81, 22, 22, 1);">Blog</label>
                            <textarea class="textarea" name="blog"></textarea>
                        </div>

                        <div class="mb-3 im">
                            <label for="image" class="form-label" style="color: rgba(81, 22, 22, 1);">Image</label><br>
                            <input type="file" id="img" name="file" accept="image/*" class="rl1">

                        </div>


                        <div style="text-align: center;padding:20px;" class="sm">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>


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


    <script type="text/javascript">
        $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
        });
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>


    <script src="./js/signup.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>

</html>