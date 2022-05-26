<?php
include('../dbconfig.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST['alias'])) {
        $nameErr = "Username is Required";
    }
    else {
        // Add Duplication Check
        
        
        $alias = $_POST['alias'];
        $username = $_POST['username'];
        
        $sql = "INSERT INTO alias_to_user (Alias,UsernameID) VALUES ('$alias',$username)";
        
        if(mysqli_query($conn, $sql)){
        echo "Record Added";
        //header("location: ../index.php");
        } else {
        echo "Error: Could not execute $sql. " . mysqli_error($conn);
        }
    }
}

$sql = 'SELECT ID,Username FROM user';
$result = mysqli_query($conn,$sql);

$sql2 = 'SELECT * FROM user AS U, alias_to_user AS A WHERE A.UsernameID = U.ID';
$result2 = mysqli_query($conn,$sql2);

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
    <h1 class="player-h1">Adding Players Alias</h1>
    <p class="player-p">This is the renames players have used</p>

    <form class="add" action="/data/alias.php" method="post">
        <label >Select User</label><br>
        <select name="username" id="username" class="w3-select w3-border w3-round" style="width: 50% ;">
        <option value="" disabled selected>Please Select a Username</option>
        <?php 
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<option value="' . $row['ID'] . '">' . $row['Username'] . '</option>';
            }        
        ?>   
        </select><br>
        <label>Enter Alias For User</label><br>
        <input class="w3-input w3-animate-input w3-round" style="width:25%; max-width:50%" type="text" name="alias" id="alias"><br><br>
        <input class="w3-button w3-green w3-round" type="submit" value="Submit">
    </form> 
    
    <?php
    if($result2->num_rows > 0) {
        echo "<table class='w3-table'>";
        echo "<tr class='w3-blue'>";
        echo "<th>User ID</th>";
        echo "<th>Alias</th>";
        echo "<th>Username</th>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result2)) {
            echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['Alias'] . "</td>";
            echo "<td>" . $row['Username'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 Results";
    }?>


</div>
</html>