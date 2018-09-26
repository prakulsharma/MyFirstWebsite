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
          <form action="dummy.php" id="cse-search-box" method="get">
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
          <p style="padding: 0 20px;"><a class="nav" href="member.php">Home</a></p>
          <p style="padding: 0 20px;"><a class="nav" href="#">Profile</a></p>
          <p style="padding: 0 20px;"><a class="nav" href="logout.php">Logout</a></p>
        </div>
</div>
<div style="margin-top: 68px;">
        <div class="container">
                <div class="tool pad">
                        <div class="ps-card" style="padding-bottom:5px">
                          <p style="margin-top: 0;text-align: center; font-size:25px;">Resources</p>
                          <ul>
                            <li><a style="text-decoration: none;" href="dummy.php">Tests</a></li>
                            <li><a style="text-decoration: none;"href="dummy.php">Notes</a></li>
                            <li><a style="text-decoration: none;" href="dummy.php">Courses</a></li>
                            <li><a style="text-decoration: none;" href="dummy.php">Projects</a></li>
                          </ul>
                        </div>
                        <div class="ps-card" style="padding-bottom:5px">
                          <p style="text-align: center; font-size:25px;">hello</p>
                        </div>
                </div>
                <div class="feed pad">
                        <div class="ps-card" style="padding:3%">
                          <form method="post" action="add.php">
                            <div style="display: flex;">
                              <input style="padding:2%; border-top-right-radius: 0; border-bottom-right-radius: 0;" type="text" name="body" placeholder="Make a post">
                              <input style="border:1px solid #0003 ;border-top-right-radius: 4px; border-bottom-right-radius: 4px; border-top-left-radius: 0; border-bottom-left-radius: 0; background-color: #0909;color: white; width: 25%" type="submit" name="post_btn" value="Post">
                            </div>
                          </form>
                        </div>

                        <div class="ps-card" style="padding-bottom:5px;">
                            <div style="position: relative;margin-top: 20px; padding-top: 10px">

                          <?php
                                $posts = show_posts($_SESSION['userid']);
                                 
                                if (count($posts)){
                                ?>
                                <div style="width: 90%; margin-left: auto; margin-right: auto;">
                                <?php
                                foreach ($posts as $key => $list){
                                    echo "<div style=' border:1px solid black;border-radius: 4px; margin:20px 0; padding:0 10px;'>\n";
                                    echo "<p><strong>".$list['firstname'] ." ".$list['surname'] ."</strong></p><br>\n";
                                    echo "<p>".$list['body'] ."</p><br>\n";
                                    echo "<p>".$list['stamp'] ."</p>\n";
                                    echo "</div>\n";
                                }
                                ?>
                                </div>
                                <?php
                                }else{
                                ?>
                                <p><b>There are no posts yet!</b></p>
                                <?php
                                }
                          ?>

                            </div>
                        </div>
                </div>
                <div class="extra pad">
                        <div class="ps-card" style="padding-bottom:5px">
                          <p style="margin-top: 0; text-align: center; font-size:25px;">Resources</p>
                          <ul>
                            <li>Tests</li>
                            <li>Notes</li>
                            <li>Courses</li>
                            <li>Projects</li>
                          </ul>
                        </div>
                </div>
        </div>
  </div>
</body>
</html>