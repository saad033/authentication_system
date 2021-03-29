<?php 
$fname = ""; // First name
$lname = ""; // Last name
$email ="";  // Email
$email2 =""; // Confirm Email
$password = ""; // Password
$error = array();// this array holds error messages

// First Name Validation

if(isset($_POST['submit']))
{

// Validation for First Name

$fname = strip_tags($_POST['fname']);   //Remove HTML Tags
$fname = str_replace (' ','',$fname); // Remove spaces
$fname = ucfirst(strtolower($fname)); // UpperCase first letter
$_SESSION['fname'] = $fname; // store Data into session variable
// Validation for Last Name
$lname = strip_tags($_POST['lname']); // Remove HTML Tags
$lname = str_replace(' ','', $lname); // Remove spaces
$lname = ucfirst(strtolower($lname)); // UpperCase first letter
$_SESSION['lname'] = $lname; // store Data into session variable
// Validation for Email
$email = strip_tags($_POST['email']); // Remove HTML Tags
$email = str_replace(' ','',$email); // Remove spaces
$email = strtolower($email); // lower case
// $email = filter_var($email,FILTER_EMAIL_SANITIZE);
$_SESSION['email'] = $email; // store Data into session variable


// Cofirm Email
$email2 = strip_tags($_POST['email2']); // Remove HTML Tags
$email2 = str_replace(' ' ,'',$email2); // Remove spaces
$email2 = strtolower($email2); // lower case
// $email2 = filter_var($email2,FILTER_EMAIL_SANITIZE);

$_SESSION['email2'] = $email2; // store Data into session variable
// Password
$password = strip_tags($_POST['password']); // Remove HTML Tags
$password = md5($password);
require_once("more_validation.php");
require_once("name_validation.php");
require_once("password_validation.php");
$query = mysqli_query($conn,"INSERT into signup_data(fname,lname,email,email2,password) VALUES('$fname','$lname','$email','$email2','$password')");

}
// if($email == $email2)
// {
// if(filter_var($email,FILTER_VALIDATE_EMAIL))
// {
// 	$email = filter_var($email, FILTER_VALIDATE_EMAIL);
// 	$e_check = mysqli_query($conn,"SELECT email from signup_data WHERE email='$email'");

// 	// Check if already exist or not
// 	$num_rows = mysqli_num_rows("$e_check");
// 	 if($num_rows > 0)
// 	 {
// 	array_push($error, "Email is already exist<br>");

	
// 	}
// 	else
// 	{
// 		array_push($error, "Email is not valid<br>");
// 	}

	
		
// 	 }
// 	 else{
// 	 	array_push($error,"Email does not match<br>");
// 	 }
// 	 if (strlen($fname) < 25 || strlen($fname) > 2) {
// 	 	array_push($error, "Your First name should be between 2 & 25 characters<br>");
// 	 }
// 	 if (strlen($lname) < 25 || strlen($lname) > 2) {
// 	 	array_push($error, "Your Last name should be between 2 & 25 characters<br>");
// 	 }

// 	 {
// 	 	if (preg_match('/[^A-Za-z0-9]/', $password)) {
// 	 		array_push($error,"Password contain Alphabets & Numbers only<br>");
// 	 	}
// 	 	if (strlen($password) < 20 || strlen($password) > 5 ) {
// 	 		array_push($error, "Your password should be between 5 & 20 characters<br>");
// 	 	}
// 	 	if (empty($error)) {
// 	 		$password = md5($password); // Convert password into Hashing before sending into Data Base
// 	 	}

// 	 }

// 	 $query = mysqli_query($conn,"INSERT into signup_data(fname,lname,email,email2,password) VALUES('$fname','$lname','$email','$email2','$password')");
// 	 array_push($error,"<span style='color:#14C800;'>You're all set!Go Ahead and login!</span><br>");
// 	 if($query ==1){
// 	 	echo "Data Submitted Successfully";
// 	 }
// 	 else{
// 	 	echo "Data insertion Failed";

// 	 // Clear session Variables
// 		$_SESSION['fname'] = "";
// 		$_SESSION['lname'] = "";
// 		$_SESSION['email'] = "";
// 		$_SESSION['email2'] = "";

// 	 }
// }

// }
//  ?>