<?php

$db = mysqli_connect("localhost","root","","foodie"); 

?>

<!doctype html>
<html>

<head>

<title>UPDATE Product</title>

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

<h2>UPDATE Product</h2>

<form action="update.php" method="GET">


Id NO<br>
<input type="text" name="id" placeholder="ID_NO" value="<?php echo $_GET['id']; ?>"/>
<br><br>
Product_Name<br>
<input type="text" name="product_name" placeholder="Product_Name"  value="<?php echo $_GET['product_name']; ?>"/>
<br><br>
Product_PRICE<br>
<input type="text" name="product_price" placeholder="Product_PRICE" value="<?php echo $_GET['product_price']; ?>"/>
<br><br>
STOCK<br>
<input type="text" name="stock" placeholder="STOCK"    value="<?php echo $_GET['stock']; ?>"/>
 <br><br>
<input type="submit" name="submit" value="Update"/>


</form>

</div>


<?php
if(isset($_GET['submit']))
{
	  
	 
    
	$id = $_GET['id'];
    $product_name =$_GET['product_name'];
	$product_price=$_GET['product_price'];
	$stock=$_GET['stock'];
	
    $query="UPDATE PRODUCT SET product_name='$product_name',product_price='$product_price',stock='$stock' WHERE id='$id'";
	
	$data=mysqli_query($db , $query);
	
	if($data){
		
		
		header ("location:modify.php");
		
		
		
	}
	
	
	else{
	
	echo"DATA DO NOT UPDATE";
}
	
   

}


?>

</body>

</html>




