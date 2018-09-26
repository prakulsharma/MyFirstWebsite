
<!--.....................................................BASIC HEADER DEFINING DATABASE..............................................-->




<?php
//error_reporting(0);
$host = 'Localhost';
$user = 'root';
$pass = '';
$db = 'learner';

$con = mysqli_connect($host,$user,$pass,$db);

if (!($mylink = mysqli_connect($host,$user,$pass,$db))){
    echo  "<h3>Sorry, could not connect to database.</h3><br/>
    Please contact your system's admin for more help\n";
    exit;
}
?>
