<?php

$db = mysqli_connect("localhost","root","","foodie"); 
$sid = $_GET['sid'];
 $query="DELETE FROM `orderhistory`  WHERE sid='$sid'";
$data=mysqli_query($db , $query);

if($data){
	
		header ("location:orderhistory.php");
}

?>
