<?php   
session_start();  
include_once('header.php');
include_once('functions.php');
if(!isset($_SESSION['userid'])){  
    header("location:login.php");
}  
?> 
<!DOCTYPE html>
<html>
<head>
<title>Home - <?php echo $_SESSION['firstname'];?> <?php echo $_SESSION['surname'];?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="member.css">
</head>
<body style="background-color: #9992">

 <div id="home" class="ps-card ps-top row" style="background-color: #55E5EE">
        <div class="scholar">
          <a style="text-decoration:none;" title="Go to Scholar home" href="member.php"><h4 class="logo"><strong>Scholar</strong></h4></a>
        </div>
        <div class="searchbox">
          <form action="gsearch.html" id="cse-search-box" method="get">
            <div>
              <?php if (isset($_GET['q'])) { ?>
              <input style="padding: 2%" type="text" name="q" id="txtGoogleSearch" placeholder=" Search" value='<?php echo $_GET['q']  ?>' /> 
               <?php } else {?>
              <input style="padding: 2%" type="text" name="q" id="txtGoogleSearch" placeholder=" Search" />
              <?php } ?>
            </div>
          </form>
        </div>
        <div class="navbar">
          <p style="padding: 0 20px;"><a class="nav" href="#home">Home</a></p>
          <p style="padding: 0 20px;"><a class="nav" href="#">Profile</a></p>
          <p style="padding: 0 20px;"><a class="nav" href="logout.php">Logout</a></p>
        </div>
 </div>
<script>
  (function() {
    var cx = '018197195748697945205:lokhees-yy0';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchresults-only></gcse:searchresults-only>
</body>
</html>