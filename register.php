<?php

require "dbconfig/config.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>

<link rel="stylesheet" href="css/style.css">

</head>
<body style="background-color:#2c3e50">

<div id="main-wrapper">

<center> <h2>Registration Form</h2> 

<img src="imgs/avatar.png" class="avatar"/>
</center>



<form class="myform" action="register.php" method="post">
	     <label><b>Username:</label><br>
         <input name="username" type="text" class="inputvalues" placeholder="Type your Username" required/><br>

         <label><b>Password:</label><br>
         <input name="password" type="Password" class="inputvalues" placeholder="Your Password"required/><br>

         <label><b>Confirm Password:</label><br>
         <input name="cpassword" type="Password" class="inputvalues" placeholder="Confirm Password"required/><br>

<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/> <br>
<input type="button" id="login_btn" value="Login"/>
</form>


<?php

if(isset($_post['submit_btn']))
	{

		$username = $_post['Username'];
        $password = $_post['password'];
        $cpassword = $_post['cpassword'];

if($password==$cpassword) {
	$query="select*from user where username ='$username'";
	$query_run = mysqli_query($con,$query);
	if(mysqli_num_rows($query_run)>0)
	{
		echo'<script type="text/javascript"> alert("User Already Exists.. try another username")</script>';
	}

{
	$query="insert into user value('$username','$Password')";
	$query_run=mysqli_query($con,$query);
	if($query_run)
	{
         
		echo'<script type="text/javascript"> alert("User Register.. Go to login Page to login")</script>';
	}
	else
	{
		echo'<script type="text/javascript"> alert("Error")</script>';
}

}
}
else{

	echo'<script type="text/javascript"> alert("Password and Confirm password does not match")</script>';

}
}

?>
</div>

</body>
</html>