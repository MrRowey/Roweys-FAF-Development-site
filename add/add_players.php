<html>
<?php
include '/config.php';
?>
<head>
    <title>Add Players</title>
    <link rel="stylesheet" href="/style.css">
</head>
<nav>
    <ul>
        <li><a href="/index.php">Home</a></li>
        <li><a href="/match-results/1v1.php">1v1 Matches</a></li>
    </ul>
</nav>
<main>
<h1>Adding Players</h1>
<h4>Adding Player whom have played in a 1v1 with a prizepool more than $50</h4>

<form class="login" action="/add_players.php" method="post">
    <label for="player">Username:</label><br>
    <input type="text" name="player" id="player"><br>
    <input type="submit" value="Submit">
</form> 
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST['player'])) {
        $nameErr = "Username is Required";
    }
    else {
        $player = mysqli_real_escape_string($link,$_REQUEST['player']);

        $sql = "INSERT INTO players (name) VALUES ('$player')";
        if(mysqli_query($link, $sql)){
        echo "Record Added";
        } else {
        echo "Error: Could not execute $sql. " . mysqli_error($link);
        }
    }
}
mysqli_close($link);
?>    
</main>
</html>