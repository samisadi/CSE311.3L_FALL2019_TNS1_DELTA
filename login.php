<!doctype html>
<html>
<head>

<style>
*{margin:0px;padding:0px;}
#intro {border:10px solid salmon; width:550px; margin:25px auto;

</style>
</head>

<body >
 <body background="yes.jpeg">
 
 
<div id="intro">
<h1 align="center"> PLEASE LOGIN YOUR ACCOUNT </h1>

</div>

<br><br>

<head>
<style>
*{margin:0px;padding:0px;}
#main {border:5px solid turquoise; width:350px; margin:25px auto;

</style>
</head>
<body>

<div id="main">
<?php

  require_once("join.php");

    if (Isset($_POST ['login'])) {
		$user_name=$_POST['user_name'];
		$password=$_POST['password'];
		
		$q=' SELECT * FROM `user` where `user_name`="'.$user_name.'" and `password`="'.$password.'"';
		$r = mysqli_query($con, $q);
		if ( mysqli_num_rows ($r)>0 ){
			echo 'Wait for log in soon..';
			
		}else {
			
			echo 'YOUR PASSWORD & USER NAME DOES NoT Match';
		}
		
		
	}

?>



<h2 align="center">

<form method="post">
User Name<br>
<input type="text" name="user_name" placeholder="user Name"required/>
<br><br>

Password<br> 
<input type="password" name="password" placeholder="Password"required/>
<br><br>
</h2>
<h2 align="right"> <input type="submit" name="login" value="LOGIN NOW"/>

</h2>
</form>

</div>
</body>

</html>