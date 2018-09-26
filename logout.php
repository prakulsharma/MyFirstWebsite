

<!--..........................................................LOG OUT...........................................................-->


<?php   

include("header.php");

session_start();  
unset($_SESSION['userid']);  
session_destroy();  
echo "Successfully logged out!";
header("location:main_page.html");  
?>  