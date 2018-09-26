<?php  
 include("header.php");

if(isset($_POST["submit"])){  
  
if(!empty($_POST['email_login']) && !empty($_POST['pwd_login'])) {  
    $email_login = $_POST['email_login'];  
    $pwd_login = $_POST['pwd_login']; 
	
	$con = mysqli_connect($host,$user,$pass,$db) or die(mysqli_error());   
  
    $query = mysqli_query($con,"SELECT * FROM users WHERE email='".$email_login."' AND pwd='".$pwd_login."'");  
    $numrows = mysqli_num_rows($query); 
	
    if($numrows!=0)  
    {  
		while($row=mysqli_fetch_array($query))  
		{  
			$dbfname = $row['firstname'];
			$dbsname = $row['surname'];
			$dbemail=$row['email'];  
			$dbpwd=$row['pwd']; 
			$dbuserid=$row['user_id'];
		}  
	  
		if($email_login == $dbemail && $pwd_login == $dbpwd)  
		{  
			session_start();  
			$_SESSION['userid']=$dbuserid;
			$_SESSION['firstname']=$dbfname;
			$_SESSION['surname']=$dbsname;
			/*....................................IF SUCCESSFUL DIRECTS TO DASHBOARD I.E. MEMBER.PHP.................................*/
			header("Location: member.php");  
		}  
    } 
	else {  
		header("Location: incorrect.html");  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  