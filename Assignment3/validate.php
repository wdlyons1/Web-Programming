<!-- contains html input form and client-side validation -->

<?php
$email = "nothing@nothing.com";
$name = $state = "";
$birthday = date("m/d/Y");
$age = 0;
$zip = 00000;

if (isset($_POST["submit"])) {
    $email = ($_POST["email"]);
    $name = ($_POST["name"]);
    $birthday = ($_POST["birthday"]);
    $age = ($_POST["age"]);
    $state = ($_POST["state"]);
    $zip = ($_POST["zip"]);

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

// function test_input($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }
// function test_bday($data)
// {
//     $data = trim($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }
