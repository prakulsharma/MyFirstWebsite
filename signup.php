<?php 

 include("header.php");
 
 $fname = $_POST['firstname'];
 $sname = $_POST['surname'];
 $num = $_POST['number'];
 $email = $_POST['email'];
 $pass = $_POST['pwd'];
 $gen = $_POST['gender'];
 
$sql = "INSERT INTO `users`(`firstname`, `surname`, `phone`, `email`, `pwd`, `gender`) 
VALUES ('$fname','$sname','$num','$email','$pass','$gen')";

$query = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width; initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    * {
      box-sizing: border-box;
    }

    /* style the container */

    .container {
      margin-left: auto;
      margin-right: auto;
      position: relative;
      width: 620px;
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px 0 30px 0;
    }

    /* style inputs and link buttons */

    input,
    .btn {
      width: 100%;
      padding: 12px;
      border: 1px solid #0003;
      border-radius: 4px;
      margin: 5px 0;
      opacity: 0.85;
      display: inline-block;
      font-size: 17px;
      line-height: 20px;
      text-decoration: none;
      /* remove underline from anchors */
    }

    input:hover,
    .btn:hover {
      opacity: 1;
    }

    /* add appropriate colors to fb, twitter and google buttons */

    .fb {
      background-color: #3B5998;
      color: white;
    }

    .google {
      background-color: #dd4b39;
      color: white;
    }

    .signup {
      background-color: #55E5EE;
      color: white;
    }

    /* style the submit button */

    input[type=submit] {
      background-color: #4CAF50;
      color: white;
      margin-left: 35%;
      width: 30%;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    /* Two-column layout */

    .col {
      float: left;
      width: 50%;
      margin: auto;
      padding: 0 50px;
      margin-top: 6px;
    }

    /* Clear floats after the columns */

    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* vertical line */

    .vl {
      position: absolute;
      left: 50%;
      transform: translate(-50%);
      border: 1px solid #ddd;
      height: 175px;
    }


    /* hide some text on medium and large screens */

    .hide-md-lg {
      display: none;
    }


    /* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */

    @media screen and (max-width: 650px) {
      .col {
        width: 100%;
        margin-top: 0;
        margin-left: auto;
        margin-right: auto;
      }
      /* hide the vertical line */
      .vl {
        display: none;
      }
      /* show the hidden text on small screens */
      .hide-md-lg {
        display: block;
        font-family: helvetica;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
      }

      .container {
        width: 80%;
      }
    }

    #logo {
      font-size: 70px;
      text-align: center;
      margin-top: 90px;
      font-family: helvetica;
      color: #55E5EE;
    }

    #tagline {
      text-align: center;
      color: gray;
      font-size: 20px;
    }

    #forgot {
      float: left;
      font-size: 13px;
      margin-top: 10px;
      color: gray;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <a style="text-decoration:none;" title="Go to Scholar home" href="main_page.html">
    <h1 id="logo">Scholar</h1>
  </a>
  <p id="tagline">A place for students to learn and share their knowledge</p><br><br>
  <p id="tagline">Your account has been succesfully created. You may <a href="main_page.html">login</a> now.</p>
</body>

</html>