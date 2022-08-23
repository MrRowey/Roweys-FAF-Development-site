<?php
// Connecting to the Database
$conn = mysqli_connect('localhost','datahubPub','*MQ8[RdqAaD2V9XK','datahub');

if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>FAF Tournament Match Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

</head>
<nav class="w3-bar w3-blue">
    <a href="/index.php" class="w3-bar-item w3-button w3-mobile">Home</a>
    <a href="/public/tournamentMatchData.php" class="w3-bar-item w3-button w3-mobile">Tournament Match Data</a>
    <a href="/login.php" class="w3-bar-item w3-button w3-mobile" style="float: right;" >Login</a>
</nav>

<main >
    <h1> FAF Tournament Match Data</h1>
    <p> This site is to display and look up Tournament data. Currenly 1v1 Data is only mesured at anything with a min of $50 Prize pool</p>
</main>
</html>