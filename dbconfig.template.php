<?php 
// make sure to set the config files setting for the site to work with the database.
$hostname = 'ENTER HOST LOCATION HERE';
$username = 'ENTER DB USERNAME HERE';
$password = 'ENTER DB PASSWORD HERE';
$dbname = 'ENTER DB NAME HERE';

$conn = mysqli_connect($hostname,$username,$password,$dbname);

if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>