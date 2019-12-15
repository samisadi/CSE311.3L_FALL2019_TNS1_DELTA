

<!doctype html>
<html>

<head>

<title>INSERT Product</title>

 <link rel="stylesheet" href="style.css">

</head>





<body>



<div class="main">

<h2>INSERT Product</h2>

<form action="insert.php" method="post" enctype="multipart/form-data">

Product_Name<br>
<input type="text" name="product_name" placeholder="Product_Name"/>
<br><br>
Product_PRICE<br>
<input type="text" name="product_price" placeholder="Product_PRICE"/>
<br><br>
STOCK<br>
<input type="text" name="stock" placeholder="STOCK"/>
 <br><br>
 Upload IMAGE<br>
 <input type="file" name="file"  value="">


<input type="submit" name="submit" value="Upload"/>


</form>

</div>


<?php



  if($_POST['submit']){



   $product_name= $_POST['product_name'];
   $product_price= $_POST['product_price'];
   $stock= $_POST['stock'];
   $filename= $_FILES["file"]["name"];
   $folder="image/".$filename;
   $db = mysqli_connect("localhost","root","","foodie");

   
    if($product_name!="" && $product_price!="" && $stock!="" && $filename!=""){
		
		$q="INSERT INTO PRODUCT VALUES('','$product_name','$product_price','$stock','$folder')";
		$data= mysqli_query($db,$q);
		
		
		}
	 
	

     



}

?>

</body>

</html>




