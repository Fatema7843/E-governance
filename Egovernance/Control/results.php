<?php
$uname=$_POST["uname"];
if($uname=""){

    echo "please enter a valid name";
}
else {
    echo "your username is".$_POST["uname"]

}
echo "<br>"
$pass=$_POST["password"];
if(strlen($pass)<5){

    echo"please enter a valid password";
}
else {

echo "your passwored is valid";

}

?>
