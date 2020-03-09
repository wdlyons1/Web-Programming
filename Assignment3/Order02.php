<?php
    session_start();
	$_SESSION["color"] = "";

	if (isset($_POST["submit"])) {
       $_SESSION["name"] = $_POST["fname"];
       $_SESSION["car"] = $_POST["model"];
	}
	$name = $_SESSION["name"];
	$car = $_SESSION["car"];
	setcookie($name,$car,time() + (86400 * 30));

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Order02</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

	<h1>Select Color</h1>

  <div class="forms">
    <form method="post" action="Order03.php">

		<p>Pick a Color: </p>
		<select id="color" name="color">
			<option value="red">Red</option>
			<option value="black">Black</option>
			<option value="white">White</option>

		<br>
		<br>
		<input type="submit" name="submit" value="Next">
	</form>
	<div>



  </body>

</html>