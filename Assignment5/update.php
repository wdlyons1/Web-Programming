<?php

//Form Handeling
$purchaseNo = '';
$supplierID = '';
$date;
$quantity = 0;
$description = '';
$price = 0.00;


if (isset($_POST["submit"])) {

    $purchaseNo = $purchaseNo . $_POST["purchaseNo"];
    $supplierID = $supplierID . $_POST["supplierID"];
    $date = $_POST["date"];
    $quantity = $_POST["quantity"];
    $description = $description . $_POST["description"];
    $price = $_POST["price"];
    
}

//DB Connection
$servername = "localhost";
$username = "wlyons2";


$conn = new mysqli($servername, $username, $username, $username);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Purchases (PurchaseNo, SupplierID, Date, Quantity, Description, Price)
VALUES ('" . $purchaseNo . "', '" . $supplierID . "', '" . $date . "', ".  $quantity . ", '" . $description . "', " . $price . ")";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>Redirecting in 3 seconds";
    header("Refresh: 3; URL=http://codd.cs.gsu.edu/~wlyons2/Assignments/5/display.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
