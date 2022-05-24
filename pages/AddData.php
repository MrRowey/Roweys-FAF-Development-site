<?php
include('../dbconfig.php');
?>
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
    <a href="/pages/1v1.php" class="w3-bar-item w3-button w3-mobile">1v1 Match Data</a>
    <a href="/pages/AddData.php" class="w3-bar-item w3-button w3-mobile">Add Data</a>
    <!--<a href="#" class="w3-bar-item w3-button w3-mobile">Link 2</a>-->
    <a href="/login.php" class="w3-bar-item w3-button w3-mobile" style="float: right;" >Login</a>
</nav>
<main>
    <div class="w3-row">
        <div class="w3-col s4 w3-center"><a class="w3-button w3-green" href="/data/players.php">Add Players</a></div>
        <div class="w3-col s4 w3-center"><a class="w3-button w3-green" href="/data/maps.php">Add Maps</a></div>
        <div class="w3-col s4 w3-center"><a class="w3-button w3-green" href="/data//tournament.php">Add Tournaments</a></div>
    </div>
    <h1>Users</h1>
    <h4>List of all the player who have player in a 1v1 Tournamnet wiht a Prise Pool of over $50</h4>

</main>
</html>