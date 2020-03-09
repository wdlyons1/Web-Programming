<?php
	session_start();
	$name = $_SESSION["fname"];
	if (!isset($_SESSION["fname"])){
		header("location: login.php"); 
		exit;
	}

    if (isset($_POST["submit"])) {
		session_destroy();
		setcookie($fname,time() - 3600);
		header("location: login.php"); 
		exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Protected Site</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
	<h1>Logged In</h1>
	<?php
		echo "Welcome " . $name . ".";
	?>
	<p> You made it.</p>
	<br>
	<br>
	<div class="forms">
    	<form method="post">
			<input type="submit" name="submit" value="logout">
		</form>
	</div>
  </body>
  </html>
