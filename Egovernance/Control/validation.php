<?php
$uname=$_POST["uname"];
if($uname=""){

    echo "please enter a valid name";
}
else {
    echo "your username is".$_POST["uname"]

}
echo "<br>";
$image=$_POST["image"];
if($image=""){

    echo "please enter your image";
}
else {
    echo "your image ".$_POST["image"]

}
echo "<br>";

$uname=$_POST["date"];
if($uname=""){

    echo "please enter your borth date";
}
else {
    echo "your username is".$_POST["date"]

}
echo "<br>"


$pass=$_POST["create_password"];
if(strlen($pass)<5){

    echo"please enter a  password";
}
else {

echo "your passwored is valid";

}
$pass=$_POST["confirm_password"];
if(strlen($pass)<5){

    echo"please enter the  password";
}
else {

echo "your passwored is valid";

}



if(isset($_POST["d1"])){

echo "you have selected ".$_POST["d1"];


}
/*
else{
echo"you haven't selected any radio";}
if (isset ($_POST["c1"]))||isset($_POST["c2"]){


    if (isset($_POST["c1"])){

        echo"you have picked ".$_POST["c1"];
    }
}*/


?>
