<?php 

// if ($email !=$email2) {
// array_push($error,"Email don't Match<br>");
// // if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
// // 	$checks = mysqli_query($conn,"SELECT email from signup_data where email = '$email'");
// // 	$num_rows =mysqli_num_rows($checks);
// // 	if($num_rows > 0){
// // 		array_push($error,"Email is already in Use<br>");
// // 	}
// // }
// }

	if($email == $email2){
		// Check if the Email is in Valid Format
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){

			$email = filter_var($email, FILTER_VALIDATE_EMAIL);
			// Check if email already exists
			$e_check = mysqli_query($conn,"SELECT email from signup_data WHERE email='$email'");

			// count the number of rows returned
			$num_rows = mysqli_num_rows($e_check);


			if($num_rows > 0)
		{
			array_push($error,"Email is already in Use<br>") ;
		}

	
	}
		
	else{
		array_push($error, "Invalid email format<br>") ;
	}
}

	else{
		array_push($error,"Email don't Match<br>") ;
	}
 ?>