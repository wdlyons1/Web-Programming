<?php
$username = "wlyons2";
$servername = "localhost";

$conn = new mysqli($servername, $username, $username, $username);

if ($conn->connect_error) {
    die("Sorry - unable to connect to MySQL" . $conn->connect_error);
}

$sql = "SELECT * FROM Purchases";

$result = mysqli_query($conn, $sql);

echo "<!DOCTYPE html>
    <html lang='en'>
    
    <head>
    <meta charset='utf-8'>
    <title>Assignment 5</title>
    <link rel='stylesheet' type='text/css' href='style.css'>
    </head>
    
    <body>
        <!-- Nav Bar -->
        <div class='topnav'>
                <a href='http://codd.cs.gsu.edu/~wlyons2/Assignments/1/index.html'>Home</a>
                <a href='http://codd.cs.gsu.edu/~wlyons2/Assignments/5/index.html'>Assignment5 Home</a>
                <a class='active' href='http://codd.cs.gsu.edu/~wlyons2/Assignments/5/display.php'>Display</a>
                <a href='http://codd.cs.gsu.edu/~wlyons2/Assignments/5/newpurchase.html'>Add New Purchase</a>
                <a href='http://codd.cs.gsu.edu/~wlyons2/Assignments/5/query.html'>Search by Supplier ID</a>
            </div>
          <br>
          <br>
          <br>";

if ($result) {
    
    if (mysqli_num_rows($result) > 0) {
        echo "<div class='centerTable'><h1 style='text-align:center;'>Purchases</h1><table class='center'>";
        echo "<tr><th>PurchaseNo</th><th>SupplierID</th><th>Date</th><th>Quantity</th><th>Description</th><th>Price</th></tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['PurchaseNo'] . "</td>";
            echo "<td>" . $row['SupplierID'] . "</td>";
            echo "<td>" . $row['Date'] . "</td>";
            echo "<td>" . $row['Quantity'] . "</td>";
            echo "<td>" . $row['Description'] . "</td>";
            echo "<td>$" . $row['Price'] . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
} else {
    echo "0 results";
}
echo "</div></body></html>";
myspli_close($link);
