<form action="signup.php" method="POST">
		<div class="container">
  		<div class="form-group">
  		<label for="exampleInputEmail1">Login Email</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please Enter your Registered Email" name="login_email" value="<?php
    if(isset($_SESSION['login_email'])){
      echo $_SESSION['login_email'];
    } 
     ?>" required>
    <br>
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="login_password" required>
    <br>
    <button type="submit" class="btn btn-success" name="login_button">Login</button>
    <br>
    <?php 
    if(in_array("Email or Password was incorrect<br>",$error))
    echo "Email or Password was incorrect<br>";
     ?>
	</div>
	</div>
	</form>