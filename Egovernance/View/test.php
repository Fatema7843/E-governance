<?php
include"../Control/results.php";
?>
<?php 
setcookie =("user_detect","visited",time()+84600*7,"/");
if (isset ($_COOKIE["user_detect"]){

echo"Hey!! you have visited before";


}
else
{

    echo"Hi this is your 1st time visit";

}
?>