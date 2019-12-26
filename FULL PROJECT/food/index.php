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
		  
          font-size: 50px;
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

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #00B4CC;
  border-right: yes;
  padding: 5px;
  height: 20px;
  outline: yes;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: black;
}

.searchButton {
  width: 100px;
  height: 36px;
  border: 3px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 50%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-30%, -30%);
}
 </style>

    
</head>
<body>


   <a href="index.php" class="logo">FOOD SHOP</a>
<ul>
   
  <li><a class="active" href="index.php">Home</a></li>
   <li><a href="menu.php">MENU</a></li>
  <li><a href="receipt.php">MONEY RECEIPT</a></li>
  <li><a href="trackorder.php">TRACK ORDER</a></li>
  <li><a href="about.php">ABOUT</a></li>
 <li><a href="logout.php">Logout</a></li>
					
  

 
  
  
  
</ul>



<div class="wrap">
   <div class="search">
      <form action="searchresult.php" method="GET">
	
      <input type="text" class="searchTerm" name="product_name" placeholder="product_name"  value=""  />
	
      <input type="submit" name="submit"  class="searchButton" value="search">
       </form>
   
	 
   </div>
</div>

</body>
</html>