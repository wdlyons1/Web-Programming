<?php
	session_start();
	$fname = "";
	$password = "";
	if (isset($_POST["submit"])) {
        $_SESSION["fname"] = $_POST["fname"];
		$fname = $_SESSION["fname"];
		$password = $_POST["password"];
		setcookie($fname,time() + (86400));	
		if ($password == "guest"){
			header("location: protected.php"); 
			exit;
		}
	}



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

	<h1>Protected Login</h1>

  <div class="forms">
    <form method="post">
		<label>First name:</label>
		<input type="text" name="fname" value="<?php echo $fname ?>" class="formElement" placeholder="first name" title="first name" required="" autofocus="">

		<br>
		<label>Password:</label>
		<input type="password" name="password" class="formElement" placeholder="password" title="password" required="">		
		<input type="hidden" name="postback" value="true">
		<br>
		<br>
		<input type="submit" name="submit" value="login">
		<br>
		<br>

	</form>
	<div>


  </body>

</html>
