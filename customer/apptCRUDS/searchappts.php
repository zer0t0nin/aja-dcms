<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "ajadcms";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


$appt_id = $_POST['appt_id'];

$result = mysqli_query($conn,"SELECT * FROM req_appts WHERE appt_id = '$appt_id'");

$sql = "SELECT * FROM req_appts";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>


