<?php
$email = "nothing@nothing.com";
$name = $state = "";
$birthday = date("m/d/Y");
$age = 0;
$zip = 00000;

if (isset($_POST["submit"])) {
    $email = test_input($_POST["email"]);
    $name = test_input($_POST["name"]);
    $birthday = test_input($_POST["birthday"]);
    $age = test_input($_POST["age"]);
    $state = test_input($_POST["state"]);
    $zip = test_input($_POST["zip"]);

    echo "<h2>Your Input:</h2>";
    echo $email;
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $birthday;
    echo "<br>";
    echo $age;
    echo "<br>";
    echo $state;
    echo "<br>";
    echo $zip;
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function test_bday($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}
