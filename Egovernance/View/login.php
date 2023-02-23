<?php
include("../Control/logincheck.php")

?>


<html>
    <head>
        <title>Login the E-Governance </title>
</head>
<body>
    <h1>Login the E-Governance <hr></h1>
    <form action ="" method="post">
        User Name:
        <input type="text" name = "uname">
        Password:
        <input type ="password" name="password">
        <p>
         <a href="registration.php" >Create an account</a> OR



         <input type ="submit" name="Submit"></p>
</form>
</body>
</html>