<?php
session_start();
if(isset ($_POST["Submit"]))
{
if ($_POST["uname"]=="cartoon"&& $_POST["password"]=="123")
{
$_SESSION ["uname"]=$_POST["uname"];
header("location:../View/profile.php");




}

else{



    echo"Your username, password is not valid";
}



}
?>