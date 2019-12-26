<!doctype html>
<html>
<head>

<style>
*{margin:0px;padding:0px;}
#intro {border:10px solid plum; width:550px; margin:25px auto;

</style>
</head>

<body>
 <body background="new.jpeg">
<div id="intro">
<h2 align="center">Please Registration For FOODIE Community</h2>

</div>
<br><br>

<head>

<style>
*{margin:0px;padding:0px;}
#main {border:5px solid beige ; width:350px; margin:25px auto;

</style>
</head>
<body>
<?php
 require_once("join.php");



 if (isset ($_POST ['register'])){

	 $first_name= $_POST['first_name'];
	 $middle_name= $_POST['middle_name'];
	 $last_name= $_POST['last_name'];
	 $email= $_POST['email'];

	 $user_name= $_POST['user_name'];
	 $password= $_POST['password'];

	 if ($first_name !=""and $middle_name !="" and $last_name !="" and $email !="" and $user_name !="" and $password !=""){

	 $q= "INSERT INTO `user` VALUES('$first_name','$middle_name','$last_name','$email','$user_name','$password')
	 ";
	 if (mysqli_query($con, $q)){
		 header ("location:login.php");
 } else {
 echo $q; }
 }else{
	 echo"Please First Fill All Boxes";

	 }

 }
?>


<div id="main">
<h2 align="center">

<form method="post">
First Name<br>
<input type="text" name="first_name" placeholder="First Name"/>
<br><br>
Middle Name<br>
<input type="text" name="middle_name" placeholder="Middle Name"/>
<br><br>
Last Name<br>
<input type="text" name="last_name" placeholder="Last Name"/>
<br><br>
E-MAIL<br>
<input type="text" name="email" placeholder="E-MAIL"/>
<br><br>
User Name<br>
<input type="text" name="user_name" placeholder="User Name"/>
<br><br>
Password<br>
<input type="password" name="password" placeholder="Password"/>
<br><br>
</h2>
<h2 align="right"> <input type="Submit" name="register" value="Register"/>

</h2>
</form>

</div>

</body>

</html>
