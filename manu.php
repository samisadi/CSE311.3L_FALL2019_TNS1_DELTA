
<!<!DOCTYPE html>



<html>

  <head>
    <meta charset="utf-8">
    <title>FOOD SHOP MANU</title>


   <link  href="https://fonts.google.com/" rel="stylesheet">

    <link rel="stylesheet" href="st.css">




  </head>

  <body>




  <header>
       <a href="home.php" class="logo">FOOD SHOP</a>


       <nav>
         <ul>
           <li><a href="home.php">HOME</a></li>
            <li><a href="manu.php">MANU</a></li>
             <li><a href="about.php">ABOUT</a></li>
             

         </ul>

       </nav>

    </header>


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
	    <th>PRODUCT_NAME</th> 
		<th>PRODUCT_PRICE</th> 
		<th>STOCK</th> 
		<th>IMAGE</th> 
		 
	   </tr>
	
	
	
	
	
	
	
	
	<?php
	
	
while ($result = mysqli_fetch_assoc($data)) {


   echo "
    
	<tr>
	    <td>".$result['product_name']."</td> 
		<td>".$result['product_price']."</td> 
		<td>".$result['stock']."</td> 
		<td> <img src='".$result['image']."' height= '100' width='100'/></td> 
		 
	   </tr>
	
	
";
    }

}


 ?>

</table>


  </body>


</html>
