<?php
require_once "./config.php";
$p_id = $_GET['id'];
$sql1 = "DELETE FROM posts WHERE post_id = '{$p_id}'";
$result = mysqli_query($conn, $sql1) or die('Error:' . mysqli_error($conn));
header("Location: ./blog_check.php");
mysqli_close($conn);
