<?php

$db = mysqli_connect("localhost","root","","foodie"); 
$id = $_GET['id'];
 $query="DELETE FROM PRODUCT  WHERE id='$id'";
$data=mysqli_query($db , $query);

if($data){
	
		header ("location:modify.php");
}

?>
