<?php
    session_start();
    if (isset($_POST["submit"])) {
        $color = $_SESSION["color"] = $_POST["color"];
	}
	setcookie($color,time() + (86400 * 30));
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Order03</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

	<h1>Here You Go!</h1>

	<div class="forms">
    <form method="post" action="Order01.php">

	<?php
        $name = $_COOKIE["name"] = $_SESSION["name"];
        $car = $_COOKIE["car"] = $_SESSION["car"];
        $color = $_COOKIE["color"] = $_SESSION["color"];
        
        echo "<h3>Congrats " . $_COOKIE["name"] . "! <br>Here is your new, " . $_COOKIE["color"] . ", " . $_COOKIE["car"] . "!!!<br>";
        echo "<br>";
        if ($car == "4runner" && $color == "red") {
            echo "<img src='images/red_4runner.jpg'>";
        }
        if ($car == "4runner" && $color == "black") {
            echo "<img src='images/black_4runner.jpg'>";
        }
        if ($car == "4runner" && $color == "white") {
            echo "<img src='images/white_4runner.jpg'>";
        }
        if ($car == "Supra" && $color == "red") {
            echo "<img src='images/red_supra.jpg'>";
        }
        if ($car == "Supra" && $color == "black") {
            echo "<img src='images/black_supra.jpg'>";
        }
        if ($car == "Supra" && $color == "white") {
            echo "<img src='images/white_supra.jpg'>";
        }
        if ($car == "GT86" && $color == "red") {
            echo "<img src='images/red_gt86.jpg'>";
        }
        if ($car == "GT86" && $color == "black") {
            echo "<img src='images/black_gt86.jpg'>";
        }
        if ($car == "GT86" && $color == "white") {
            echo "<img src='images/white_gt86.jpg'>";
        }

    ?>
		<br>
		<br>
		<input type="submit" name="submit" value="Start Over">
	</form>
	<div>
  </body>

</html>