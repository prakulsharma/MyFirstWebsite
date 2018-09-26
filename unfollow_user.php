<!--........................................UNFOLLOW A USER................................
<?php
session_start();
include_once("header.php");
include_once("functions.php");








$msg = "You have unfollowed a user!";
$_SESSION['message'] = $msg;
header("Location:member.php");
?>