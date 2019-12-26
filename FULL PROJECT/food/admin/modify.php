
<!<!DOCTYPE html>



<html>

  <head>
    <meta charset="utf-8">
    <title>UPDATE AND DELETE</title>


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




 </style>


  




  </head>

  <body>



<a href="index.php" class="logo">ADMIN PANEL</a>
<ul>
  <li><a class="active" href="index.php">Home</a></li>
   <li><a href="insert.php">INSERT PRODUCT</a></li>
  <li><a href="modify.php">MODIFY PRODUCT</a></li>
  <li><a href="orderhistory.php">ORDER MANAGE</a></li>
 
</ul>
 


<style>td{


padding: 60px;

}</style>

<?php

$db = mysqli_connect("localhost","root","","foodie");

$sql = "SELECT * from product";

$data =   mysqli_query( $db , $sql);
$total = mysqli_num_rows($data);

if ($total!=0) {
	
	?>
	
	<table>
	  <tr>
	    <th>ID</th>  
	    <th>PRODUCT_NAME</th> 
		<th>PRODUCT_PRICE</th> 
		<th>STOCK</th> 
		<th>IMAGE</th> 
		<th colspan="2">OPERATIONS</th> 
		 
	   </tr>
	
	
	
	
	
	
	
	
	<?php
	
	
while ($result = mysqli_fetch_assoc($data)) {


   echo "
    
	<tr>
	     <td>".$result['id']."</td> 
	    <td>".$result['product_name']."</td> 
		<td>".$result['product_price']."</td> 
		<td>".$result['stock']."</td> 
		<td> <img src='".$result['image']."' height= '100' width='100'/></td> 
		<td><a href='update.php?id=$result[id] &product_name=$result[product_name] &product_price=$result[product_price]&stock=$result[stock]&folder=$result[image]'>UPDATE</a></td>
		<td><a href='delete.php?id=$result[id]'>DELETE</a></td>
		 
	   </tr>
	
	
";
    }
}
?>

</table>


  </body>


</html>
