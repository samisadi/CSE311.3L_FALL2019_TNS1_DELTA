



<!<!DOCTYPE html>



<html>

  <head>
    <meta charset="utf-8">
    <title>ORDER MANAGE</title>


 <style>




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





  
	
	
	<div class="main">

<h2>ORDER MANAGE</h2>




<form action="" method="GET">


SId NO:
 <input type="text" name="sid" placeholder="SID_NO" value="<?php echo $_GET['sid'];?>" readonly>
<br><br>
Id NO:
 <input type="text" name="id" placeholder="ID_NO" value="<?php echo $_GET['id'];?>" readonly>
<br><br>
Product_Name:
  <input type="text" name="product_name" placeholder="Product_Name" value="<?php echo $_GET['product_name']; ?>" readonly>
<br><br>
Product_PRICE:
<input type="text" name="product_price" placeholder="Product_PRICE" value="<?php echo $_GET['product_price']; ?>" readonly>
<br><br>

NAME<br>
 <input type="text" name="user_name" placeholder="NAME" value="<?php echo $_GET['user_name']; ?>" readonly>
 <br><br>

 ADDRESS<br>
 <input type="text" name="address" placeholder="ADDRESS" value="<?php echo $_GET['address']; ?>"readonly >
 <br><br>

 REMARK<br>
 <input type="text" name="remark" placeholder="REMARK">
 <br><br>

<input type="submit" name="submit" value="ORDER MANAGE">


</form>

</div>


<?php

  

  if(isset($_GET['submit'])){

   $sid=$_GET['sid'];
   $id= $_GET['id'];
   $product_name= $_GET['product_name'];
   $product_price=$_GET['product_price'];
   $user_name=$_GET['user_name'];
   $address=$_GET['address'];
  
   $remark=$_GET['remark'];
  
  
  
   $db = mysqli_connect("localhost","root","","foodie");

   
    
		
	$q="INSERT INTO `ordermanage` VALUES('$sid','$id','$product_name','$product_price','$user_name','$address','$remark')";
	$data= mysqli_query($db,$q);
		
		
		if($data){
		

$db = mysqli_connect("localhost","root","","foodie"); 
$sid = $_GET['sid'];
 $query="DELETE FROM `orderhistory`  WHERE sid='$sid'";
$data=mysqli_query($db , $query);

if($data){
	
		header ("location:orderhistory.php");
}



		
		
		}
		
			
			
		
}

?>






  </body>


</html>