<?php 
$conn = mysqli_connect('localhost','datahubadmin','CyAsK6__MXc[u@]K','datahubfaf-data');

if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>