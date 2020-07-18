<?php



?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>

<link rel="stylesheet" href="css/style.css">

</head>
<body style="background-color:#2c3e50">

<div id="main-wrapper">

<center> <h2>Login Form</h2> 

<img src="imgs/avatar.png" class="avatar"/>
</center>



<form class="myform" action="index.php" method="post">
	     <label><b>Username:</label><br>
         <input type="text" class="inputvalues" placeholder="Type your Username"/><br>

         <label><b>Password:</label><br>
         <input type="Password" class="inputvalues" placeholder="Your Password"/><br>

<input type="submit" id="login_btn" value="Login"/> <br>
<input type="button" id="register_btn" value="Register"/>

</div>
</form>

</body>
</html>