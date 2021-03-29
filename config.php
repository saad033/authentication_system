<?php 
ob_start(); // Turns on Output buffering.  
session_start();

// $fname= "";
// $lname= "";
// $email= "";
// $email2= "";
// $password = "";

// if(isset($_POST['submit'])){



// $fname = $_POST['fname'];
// $lname = $_POST['lname'];
// $email = $_POST['email'];
// $email1 = $_POST['email2'];
// $password = $_POST['password'];

// }

$conn = mysqli_connect('localhost','root','','social');

if(!$conn){

	echo "Connection Failed";
}
// $qry = "INSERT into signup_data(fname,lname,email,email2,password) 
// 		VALUES('$fname','$lname','$email','$email2','$password')";
// $result =mysqli_query($conn,$qry);

// if($result==1){
// 	 // header("location:login.php");
// 	 echo "Data Inserted Successfully";
// }
// else{
// 	echo "Data insertion Failed";
// }


 ?>