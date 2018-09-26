<!--........................................FOLLOW A USER................................
<?php
session_start();
include_once("header.php");
include_once("functions.php");









$msg = "You have followed a user!";
$_SESSION['message'] = $msg;
echo "hello";
//header("Location:member.php");
?>