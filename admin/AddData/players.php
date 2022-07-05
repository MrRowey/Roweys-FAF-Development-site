<?php
include('../dbconfig.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST['player'])) {
        $nameErr = "Username is Required";
    }
    else {
        // Add Duplicaton Check

        $player = mysqli_real_escape_string($conn,$_REQUEST['player']);

        $sql = "INSERT INTO user (Username) VALUES ('$player')";
        if(mysqli_query($conn, $sql)){
        echo "Record Added";
        //header("location: ../index.php");
        } else {
        echo "Error: Could not execute $sql. " . mysqli_error($conn);
        }
    }
}

## Add Table of all Users
$sql = 'SELECT ID,Username FROM user';
$result = mysqli_query($conn,$sql);

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
<div class="w3-container">
    <h1 class="player-h1">Adding User</h1>
    <p class="player-p">Please Add the Name of the Player you need to add to the data base </p>
    <form class="add" action="/data/players.php" method="post">
        <input type="text" name="player" id="player"><br><br>
        <input class="w3-button w3-green w3-round" type="submit" value="Submit">
    </form>    

    <?php
    if($result->num_rows > 0) {
        echo "<table class='w3-table'>";
        echo "<tr class='w3-blue'>";
        echo "<th>User ID</th>";
        echo "<th>Username</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['Username'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 Results";
    }?>
</div>
</html>