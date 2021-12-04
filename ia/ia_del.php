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
$sql = "DELETE from Internal_Marks WHERE usn=".$_POST["usn"]." and sem=".$_POST["sem"]." and subcode='".$_POST["subcode"]."'";
if ($conn->query($sql) === FALSE) 
	echo $conn->error."<br>";
else
	echo "sucessfully deleted record";
$conn->close();
?>
