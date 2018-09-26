<?php
session_start();
include_once("header.php");
include_once("functions.php");
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>All users</title>
</head>
<body>
 
<h1>List of All users</h1>
<?php
$users = show_users();
$following = following($_SESSION['userid']);


if (count($users)){
?>
<table border='1' cellspacing='0' cellpadding='5' width='500'>
<?php
foreach ($users as $key => $list){
	$key1=$list['user_id'];
    echo "<tr valign='top'>\n";
    echo "<td>".$list['user_id'] ."</td>\n";
	echo "<td>".$list['firstname']." ".$list['surname']." ";
	if (in_array($key1,$following)){
        echo " <small>
        <a href='action.php?id=$key1&do=unfollow'>Unfollow</a>
        </small>";
    }else{
        echo " <small>
        <a href='action.php?id=$key1&do=follow'>Follow</a>
        </small>";
    }
    echo "</tr>\n";
}
?>
</table>
<?php
}else{
?>
<p><b>There are no users in the system!</b></p>
<?php
}
?>
</body>
</html>