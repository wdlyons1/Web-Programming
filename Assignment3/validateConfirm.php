<!-- php server-side validation -->

<?php
include 'validationUtilities.php';

$email = "nothing@nothing.com";
$name = $state = "";
$birthday = date("m/d/Y");
$age = 0;
$zip = 00000;

if (isset($_POST["submitVal"])) {
    $email = ($_POST["email"]);
    $name = ($_POST["name"]);
    $birthday = isValidDate($_POST["birthday"]);
    $age = fIsValidRange(($_POST["age"]), 1, 130);
    $state = ($_POST["state"]);
    $zip = fIsValidZipcode($_POST["zip"]);
    
    echo "<h2>Form Details:</h2>";
    echo "Email: " . $email;
    echo "<br>";
    echo "First Name: " . $name;
    echo "<br>";
    echo "Birthday: " . $birthday;
    echo "<br>";
    echo "Age: " . $age;
    echo "<br>";
    echo "State: " . $state;
    echo "<br>";
    echo "Zip: " . $zip;
}

?>