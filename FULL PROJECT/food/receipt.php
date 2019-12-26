<?php
session_start();
if(!isset($_SESSION['user_name'])){
	header("location:login.php");
}
?>

<!<!DOCTYPE html>


<html>

<head>
<meta charset="utf-8">
    <title>FOOD SHOP</title>
 <style>
 body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

 
 .logo{

         list-style-type: none;
          font-size: 20px;
          font-weight: 100;
		  text-decoration: none;
          text-transform: uppercase;






}
 
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}





.main{
	font-family: 'Open Sans Condensed', arial, sans;
	width: 500px;
	padding: 30px;
	background: #FFFFFF;
	margin: 50px auto;
	box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
	-moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
	-webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);

}
.main h2{
	background: #4D4D4D;
	text-transform: uppercase;
	font-family: 'Open Sans Condensed', sans-serif;
	color: #797979;
	font-size: 18px;
	font-weight: 100;
	padding: 20px;
	margin: -30px -30px 30px -30px;
}
.main input[type="text"],
.main input[type="text"],
.main input[type="text"],



.main select 
{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	outline: none;
	display: block;
	width: 100%;
	padding: 7px;
	border: none;
	border-bottom: 1px solid #ddd;
	background: transparent;
	margin-bottom: 10px;
	font: 16px Arial, Helvetica, sans-serif;
	height: 45px;
}
.main textarea{
	resize:none;
	overflow: hidden;
}

.main input[type="submit"]{
	-moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
	-webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
	box-shadow: inset 0px 1px 0px 0px #45D6D6;
	background-color: #2CBBBB;
	border: 1px solid #27A0A0;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	font-family: 'Open Sans Condensed', sans-serif;
	font-size: 14px;
	padding: 8px 18px;
	text-decoration: none;
	text-transform: uppercase;
}
.
.main input[type="submit"]:hover {
	background:linear-gradient(to bottom, #34CACA 5%, #30C9C9 100%);
	background-color:#34CACA;
}
 </style>

    
</head>
  




  
  <body>




  <header>
       <a href="index.php" class="logo">FOOD SHOP</a>


       <nav>
         <ul>
           <li><a href="index.php">HOME</a></li>
            <li><a href="menu.php">MENU</a></li>
			<li><a href="receipt.php">MONEY RECEIPT</a></li>
			<li><a href="trackorder.php">TRACK ORDER</a></li>
             <li><a href="about.php">ABOUT</a></li>
             

         </ul>

       </nav>

    </header>
	
<?php

$db = mysqli_connect("localhost","root","","foodie"); 

?>







<body>



<div class="main">

<h2>MONEY RECEIPT</h2>

<form action="print.php" method="GET">



CUSTOMER Name<br>
<input type="text" name="name" placeholder="CUSTOMER_Name"  value="<?php  echo $_SESSION['user_name']?>"/>
<br><br>
<input type="submit" name="submit" value="Submit"/>

</form>

</div>




</body>


 


</html>




