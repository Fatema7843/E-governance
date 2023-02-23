
Welcome<br>
<p>
<?php

$name = $_GET["name"];

if($name==""){

echo "Please enter a valid name";


}
else{
echo " Name : ".$_GET["name"];}
echo "<br>";
if(isset($_GET["d1"]))
{

echo " Categories : ".$_GET["d1"];
}
else {

echo"You haven't selected any categories";}
echo "<br>";




?>
<table>
<tr>
<td> Email : </td>
<td><input type="text" email="ename" placeholder="please write your email"></td>

</tr>
</table>
<table>
<tr>
<td> Parmanent Address : </td>
<td><input type="text" address="addressname" placeholder="write your p.address"></td>

</tr>
</table>

<input type="submit"name="b12" value="Submit">


</p>

    


