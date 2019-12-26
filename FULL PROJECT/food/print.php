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
 
  padding:100px;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>

<body>





<?php
$db = mysqli_connect("localhost","root","","foodie"); 
if(isset($_GET['submit']))
{
	  
	 
    
	$name =$_SESSION['user_name'] ;
  
	
    $query="SELECT * from `orderhistory` WHERE user_name='$name'";
	
	
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
		<th>MOBILENUMBER</th>
		
		
		
		 
	   </tr>
<h1 align="center">FOOD SHOP</h1>
<h3 align="center">MOBILE NO:0199.....</h3>
<h3 align="center">email:foodshop@gmail.com</h3>
	
	<?php
	
	
while ($result = mysqli_fetch_assoc($data)) {


   echo "
    
	<tr>
	    <td>".$result['product_name']."</td> 
		<td>".$result['product_price']."</td> 
		<td>".$_SESSION['user_name']."</td>
		<td>".$result['address']."</td>
		<td>".$result['mobile']."</td>
	
		
		
		
	</tr>

	
	
";

?>

<?php
     }
	
	

    }
	else{

		
		echo"YOUR DATA NOT FOUND PLEASE ORDER";
	}
}

?>
</table>
<button onclick= window.print()>Print</button>



</body>


</html>