<!--............................................................FOLLOWERS.......................................................-->

<?php
session_start();
include_once("header.php");
include_once("functions.php");

$userid = $_SESSION['userid'];
$users = show_followers($userid);
 
if (count($users)){
?>
<table border='1' cellspacing='0' cellpadding='5' width='500'>
<?php
foreach ($users as $key => $list){
	$key1=$list['user_id'];
    echo "<tr valign='top'>\n";
    echo "<td>".$list['user_id'] ."</td>\n";
	echo "<td>".$list['firstname']." ".$list['surname']." ";
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