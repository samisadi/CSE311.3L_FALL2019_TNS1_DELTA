
<?php
session_start();
if(!isset($_SESSION['user_name'])){
	header("location:login.php");
}
?>



<html>
<head>


<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) 
{
	background-color: #f2f2f2;

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
<header>
       <a href="home.php" class="logo">FOOD SHOP</a>


       <nav>
         <ul>
           <li><a href="index.php">HOME</a></li>
            <li><a href="menu.php">MENU</a></li>
			<li><a href="receipt.php">MONEY RECEIPT</a></li>
             <li><a href="about.php">ABOUT</a></li>
             

         </ul>

       </nav>

    </header>
<?php
$db = mysqli_connect("localhost","root","","foodie"); 
if(isset($_GET['submit']))
{
	  
	 
    
	$name = $_SESSION['user_name'];
  
	
    $query="SELECT * from `ordermanage` WHERE user_name='$name'";
	
	
	$data=mysqli_query($db , $query);
	$total = mysqli_num_rows($data);
	

if ($total!=0) {
	
	?>
	
	<table style="width:100%">
	  <tr>
	    <th>PRODUCTNAME</th> 
		<th>PRODUCTPRICE</th> 
		<th>CUSTOMERNAME</th>
		<th>ADDRESS</th>
		<th>STATUS</th>
		<th>REMARK</th>
		
		
		
		
		 
	   </tr>
	
	<?php
	
	
while ($result = mysqli_fetch_assoc($data)) {


   echo "
    
	<tr>
	    <td>".$result['product_name']."</td> 
		<td>".$result['product_price']."</td> 
		<td>".$result['user_name']."</td>
		<td>".$result['address']."</td>
		<td>".$result['remark']."</td>
		
		
		
	</tr>
	
	
";
     }
	
	
	

    }
}

?>



</table>
</body>


</html>