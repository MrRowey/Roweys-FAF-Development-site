<?php 
$conn = mysqli_connect('localhost','faf_admin','xErAOYRgqOf10wbu','faf_tournaments');

if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>