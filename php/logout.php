<?php

require_once "../config.php";

session_start();

session_unset();

session_destroy();

echo "<script>alert('You have been Logged Out');
window.location.href='../index.php';</script>";
