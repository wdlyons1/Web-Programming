<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Order01</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

	<h1>Select Model</h1>

  <div class="forms">
    <form method="post" action="Order02.php">
		<label>Name: </label>
		<input type="text" name="fname" class="textbox" autofocus="" required="" placeholder="First name" title="first name" maxlength="20" pattern="[A-Za-z'-]{2,20}">
		<br>
		<br>
		<p>Pick a Car: </p>
		<input type="radio" name="model" required="" value="4runner">
		<label>4Runner</label>
		<br>
		<input type="radio" name="model" required="" value="Supra">
		<label>Supra</label>
		<br>
		<input type="radio" name="model" required="" value="GT86">
		<label>GT-86</label>
		<br>
		<br>
		<input type="submit" name="submit" value="Next">
	</form>
	<div>


  </body>

</html>
