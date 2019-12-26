<?php
session_start();
if(!isset($_SESSION['user_name'])){
	header("location:login.php");
}
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>FOOD SHOP</title>
 <style>
 
 body{
	 
  background: black;
  font-family: 'Open Sans', sans-serif;
  background-image: url('background2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;

}

 
 .logo{

          
		  font-family:Helvetica ;
		  
          font-size: 40px;
          font-weight: 900;
		
          text-transform: uppercase;
		  margin: 500px;


}

 .active {
  background-color: #4CAF50;
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


main{
	
	padding:50px;
	margin:50px;
}

* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 5px;
}

.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 32px;
  margin:32px;
  text-align: center;
  background-color: #444;
  color: white;
}


 </style>

    
</head>
<body>


   <a href="index.php" class="logo">ADMIN PANEL</a>


<ul>

  <li><a class="active" href="index.php">Home</a></li>
   <li><a href="insert.php">INSERT</a></li>
   <li><a href="modify.php">MODIFY</a></li>
   <li><a href="orderhistory.php">ORDER MANAGE</a></li>
   <li><a href="displayorder.php">ORDERS</a></li>
   <li><a href="logout.php">Logout</a></li>
  
</ul>
 <main>

<?php

$db = mysqli_connect("localhost","root","","foodie"); 
$sql = "SELECT count(*) as numberoforder from `orderhistory`";

$data =   mysqli_query( $db , $sql);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data) ;
$num_rows = $result['numberoforder'];


	
	    ?>
	<div class="row">
  <div class="column">
    <div class="card">
      
      <?php
     
      echo  $num_rows ;
   ?>
      <p>ORDER COUNT</p>
    
</div>
</div>	

 
</div>

</main>
 
</body>
</html>