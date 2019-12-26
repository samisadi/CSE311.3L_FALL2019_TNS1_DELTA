
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

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}
.row {
	
	margin: 5px;
	padding:5px;

}

 </style>

    
</head>

  <body>




  <header>
       <a href="index.php" class="logo">FOOD SHOP</a>


       
         <ul>
           <li><a href="index.php">HOME</a></li>
            <li><a href="menu.php">MENU</a></li>
			<li><a href="receipt.php">MONEY RECEIPT</a></li>
             <li><a href="about.php">ABOUT</a></li>
             

         </ul>

      

    </header>




<?php

$db = mysqli_connect("localhost","root","","foodie");

if(isset($_GET['submit']))
{
	  
	 
    
	$product_name= $_GET['product_name'];
  
	
$query="SELECT * from `product` WHERE product_name='$product_name'";



$data =   mysqli_query( $db ,$query );
$total = mysqli_num_rows($data);

if ($total!=0) {
	

	
while ($result = mysqli_fetch_assoc($data)) {
	
	

	    ?>
<div class="row">
  <div class="column">
 <div class="card">
 <?php
      
  echo"<img src='".$result['image']."' height= '200' width='200'>";
  echo"<h1>".$result['product_name']."</h1>";
  ?>
  <div class ="price">
  
  <?php
  echo"<p>PRICE:".$result['product_price']."</p>";
  echo"<p>STOCK:".$result['stock']."</p>";
  echo"<p><button><a href='order.php?id=$result[id] &product_name=$result[product_name] &product_price=$result[product_price]&stock=$result[stock]&folder=$result[image]'>ORDER NOW</a></button></p>";
?>
</div>
</div>
</div>
	
	<?php
	
	
	
	
	}

}
}

 ?>



  </body>

</html>
