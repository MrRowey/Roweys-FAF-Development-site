<?php
// Connecting to the Database
$conn = mysqli_connect('localhost','datahubPub','*MQ8[RdqAaD2V9XK','datahub');

if (mysqli_connect_errno()) {
// If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST['tournament'])) {
        $nameErr = "Tournament is Required";
    }
    else {
        // Add Duplication Check
        $tournament = mysqli_real_escape_string($conn,$_REQUEST['tournament']);
        $year = mysqli_real_escape_string($conn,$_REQUEST['year']);
        $sql = "INSERT INTO tournaments (Name) VALUES ('$tournament')";
        if(mysqli_query($conn, $sql)){
        echo "Record Added";
        //header("location: ../index.php");
        } else {
        echo "Error: Could not execute $sql. " . mysqli_error($conn);
        }
    }
}
$sql = 'SELECT * FROM tournaments';
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
<main class="w3-container">
    <h1 class="player-h1">Adding Tournament</h1>
    <p class="player-p">Please Add the Name of the Tournamet you need to add to the data base </p>

<form class="add" action="/data/tournament.php" method="post">
    <input class="w3-input w3-animate-input" style="width:30% ;" type="text" name="tournament" id="tournament"><br><br>
    <input class="w3-input" style="width:30%" type="number" name="year" id="year"><br><br>
    <input class="w3-button w3-green w3-round" type="submit" value="Submit">
</form> 
<?php
    if($result->num_rows > 0) {
        echo "<table class='w3-table'>";
        echo "<tr class='w3-blue'>";
        echo "<th>ID</th>";
        echo "<th>Tournament Name</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 Results";
    }?>
</main>
</html>