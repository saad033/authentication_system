<?php 


if(strlen($fname) > 25 || strlen($fname) < 2){


	array_push($error, "Your First name should be between 2 & 25 characters<br>");
}
if(strlen($lname) > 25 || strlen($lname) < 2) {

	array_push($error,"Your Last name should be between 2 & 25 characters<br>");
}




 ?>