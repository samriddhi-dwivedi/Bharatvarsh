<?php
require_once "config.php";

session_start();



if (isset($_SESSION['username'])) {
    $p_id = $_GET['id'];
    $u_id = $_SESSION['user_id'];
    $sql = "insert into likes (user_id,post_id) values ('$u_id','$p_id')";
    $res = mysqli_query($conn, $sql);




    $get_likes = "SELECT likes FROM posts WHERE post_id = $p_id";
    $res3 = mysqli_query($conn, $get_likes);
    while ($row = mysqli_fetch_assoc($res3)) {
        $total_likes = $row['likes'];
    }

    $final_likes = $total_likes + 1;
    $update_likes = "UPDATE posts SET likes = '$final_likes' WHERE post_id = $p_id";
    $res4 = mysqli_query($conn, $update_likes);



    if ($res4) {
        header("Location: ./articlepg.php?id=$p_id");
    } else
        echo "<script>alert('Some error occured')</script>";
} else {

    $p_id = $_GET['id'];
    setcookie('liked', $p_id, time() + 86400);




    $get_likes = "SELECT likes FROM posts WHERE post_id = $p_id";
    $res3 = mysqli_query($conn, $get_likes);
    while ($row = mysqli_fetch_assoc($res3)) {
        $total_likes = $row['likes'];
    }

    $final_likes = $total_likes + 1;
    $update_likes = "UPDATE posts SET likes = '$final_likes' WHERE post_id = $p_id";
    $res4 = mysqli_query($conn, $update_likes);



    if ($res4) {
        header("Location: ./articlepg.php?id=$p_id");
    } else
        echo "<script>alert('Some error occured')</script>";
}
