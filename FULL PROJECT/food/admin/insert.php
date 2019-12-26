

<!doctype html>
<html>

<head>

<title>INSERT Product</title>

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
      <a href="index.php" class="logo">ADMIN PANEL</a>
<ul>
  <li><a class="active" href="index.php">Home</a></li>
   <li><a href="insert.php">INSERT PRODUCT</a></li>
  <li><a href="modify.php">MODIFY PRODUCT</a></li>
  <li><a href="orderhistory.php">ORDER MANAGE</a></li>
 
</ul>

       

    </header>


<div class="main">

<h2>INSERT Product</h2>


<form action="insert.php" method="post" enctype="multipart/form-data">
Id NO<br>
<input type="text" name="id" placeholder="ID_NO">
<br><br>

Product_Name<br>
<input type="text" name="product_name" placeholder="Product_Name">
<br><br>
Product_PRICE<br>
<input type="text" name="product_price" placeholder="Product_PRICE">
<br><br>
STOCK<br>
<input type="text" name="stock" placeholder="STOCK">



 <br><br>
 Upload IMAGE<br>
 <input type="file" name="file"  value="">


<input type="submit" name="submit" value="Upload"/>


</form>

</div>


<?php



  if(isset($_POST['submit'])){


   $id= $_POST['id'];
   $product_name= $_POST['product_name'];
   $product_price= $_POST['product_price'];
   $stock= $_POST['stock'];
   $filename= $_FILES["file"]["name"];
   $folder="image/".$filename;
   $db = mysqli_connect("localhost","root","","foodie");

   
    if( $id!=""&& $product_name!="" && $product_price!="" && $stock!="" && $filename!=""){
		
		$q="INSERT INTO PRODUCT VALUES('$id','$product_name','$product_price','$stock','$folder')";
		$data= mysqli_query($db,$q);
		
		
		}

}

?>

</body>

</html>




