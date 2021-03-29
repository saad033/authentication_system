<?php 
require_once("config.php"); 
require_once("validation.php");
require_once("login_handler.php");

?>



<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<?php require_once("login.php"); ?>

<form action="signup.php" method="POST">
<div class="container">
  <div class="form-group">
    <label for="fromGroupExampleInput">First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please Enter Your First Name" name="fname" value="<?php if(isset($_SESSION['fname'])){
    	echo $_SESSION['fname'];
    } ?>" required>
    <br>
    <?php 
			if(in_array("Your First name must be between 2 and 25 Characters<br>", $error))
		
				echo "Your First name must be between 2 and 25 Characters<br>";

		 ?>

    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="fromGroupExampleInput">Last Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please Enter Your Last Name" name="lname" value="<?php if(isset($_SESSION['lname'])){
    	echo $_SESSION['lname'];
    } ?>" required>
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    <br>
    <?php 
    	if(in_array("Your Last name should be between 2 & 25 characters<br>",$error))
    		echo "Your Last name should be between 2 & 25 characters<br>";
     ?>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please Enter your valid Email" name="email" value="<?php if(isset($_SESSION['email'])){
    	echo $_SESSION['email'];
    } ?>" required>
    
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Confirm Email</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please Enter again your valid Email" name="email2" value="<?php if(isset($_SESSION['email2'])){
    	echo $_SESSION['email2'];
    } ?>" required>
    <br>
		<?php 
			if(in_array("Email is already in Use<br>", $error)) echo "Email is already in Use<br>";
			else if(in_array("Invalid email format<br>", $error)) echo "Invalid email format<br>";
			else if(in_array("Email don't Match<br>", $error)) echo "Email don't Match<br>";
		 ?>
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="<?php  ?>" required>
  </div>
  <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</div>
</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</body>
</html>