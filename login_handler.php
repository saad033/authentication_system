<?php 


if(isset($_POST['login_button'])){
	// $email = filter_var($_POST['login_email'],FITLER_SANITIZE_EMAIL);//sanitize Email
	$email = $_POST['login_email'];
	$_SESSION['login_email'] = $email;	// Store email into session 
	$password = md5($_POST['login_password']); // get password

	$check_database_query = mysqli_query($conn,"SELECT * FROM signup_data WHERE email = '$email' 
	AND password = '$password'");
	$check_login_query = mysqli_num_rows($check_database_query);

	if ($check_login_query == 1) {

		$row = mysqli_fetch_array($check_database_query);
		$email = $row['email'];
		$password = $row['password'];
		header("Location: index.php");
		

	}
	else{
		array_push($error,"Email or Password was incorrect<br>");
	}

	// $_SESSION['login_email'] ="";	

}


 ?>