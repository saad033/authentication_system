<?php 

if (preg_match('/[^A-Za-z0-9]/',$password)) {
	array_push($error,"Your password can only contain english characters and numbers<br>");
}

if (strlen($password) > 30 || strlen($password) < 5) {
array_push($error,"Your password must be between 5 and 30 characters<br>");
}
// Clear session Variables
		$_SESSION['fname'] = "";
		$_SESSION['lname'] = "";
		$_SESSION['email'] = "";
		$_SESSION['email2'] = "";




 ?>