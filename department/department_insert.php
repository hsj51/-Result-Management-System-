<?php
$servername = "localhost";
$username = "hrutvik";
$password = "hrutvik";
$dbname = "RMS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Departments(name,dno,hod) values('".$_POST["Dname"]."',".$_POST["Dno"].",'".$_POST["HOD"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

