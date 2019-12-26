<!<!DOCTYPE html>



<html>

  <head>
    <meta charset="utf-8">
    <title>ORDER HISTORY</title>


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

$sql = "SELECT * from `ordermanage`";

$data =   mysqli_query( $db , $sql);
$total = mysqli_num_rows($data);

if ($total!=0) {
	
	?>
	
	<table>
	  <tr>
	    <th>SERIAL_NO</th> 
	    <th>ID_NO</th> 
	    <th>PRODUCT_NAME</th> 
		<th>PRODUCT_PRICE</th> 
		<th>CUSTOMER_NAME</th> 
		<th>ADDRESS</th>
	    <th>REMARK</th>
		
		 
	   </tr>
	
	
	
	
	
	
	
	
	<?php
	
	
while ($result = mysqli_fetch_assoc($data)) {
                                                                  
   

   echo "
    
	<tr>
	     <td>".$result['sid']."</td> 
	    <td>".$result['id']."</td> 
	    <td>".$result['product_name']."</td> 
		<td>".$result['product_price']."</td> 
		<td>".$result['user_name']."</td>
		<td>".$result['address']."</td>
		<td>".$result['remark']."</td>
	     
		
         		
	
		 
	   </tr>
	
	
";
    }

}


 ?>

</table>


  </body>


</html>
