<?php
session_start();
if(!isset ($_SESSION["uname"]))
{
    header("location:login.php");

}
?>
<html>
    <head>
</head>
<body>
    <h2>Welcome </br>
         <?php
          echo $_SESSION["username"];
          ?></h2>
         <h3> <p>Electronic governance or e-governance can be defined as the usage of Information and Communication Technology <a href="https://www.w3schools.com/">ICT</a> by the government to provide and facilitate government services, exchange of information, communication transactions and integration of various standalone systems and services.The basic purpose of e-governance is to simplify processes for all, i.e. government, citizens, businesses, etc. at National, State and local levels. In short, it is the use of electronic means, to promote good governance.The basic purpose of e-governance is to simplify processes for all, i.e. government, citizens, businesses, etc. at National, State and local levels. In short, it is the use of electronic means, to promote good governance.The basic purpose of e-governance is to simplify processes for all, i.e. government, citizens, businesses, etc. at National, State and local levels. In short, it is the use of electronic means, to promote good governance.</p></h3>
<p>
  
    
    <h3>If you want to logout then please click the icon <a href= "../Control/logout.php">Logout</a></h3>
</body>
</html>
