<html>
<?php
include 'config.php';

$sql = "SELECT * from players";
$result = $link->query($sql);
?>
<head>
    <title>Player List</title>
    <link rel="stylesheet" href="/style.css">
</head>
<nav>
    <ul>
        <li><a href="/index.php">Home</a></li>
        <li><a href="/match-results/1v1.php">1v1 Matches</a></li>
    </ul>
</nav>
<main>
    <h1>Users</h1>
    <h4>List of all the player who have player in a 1v1 Tournamnet wiht a Prise Pool of over $50</h4>
    <?php
    if ($result->num_rows > 0) {
        echo '<table border="1">';
        echo '<tr>';
        echo '<th>Player ID</th>';
        echo '<th>Player Name</th>';
        echo '<th>Update</th>';
        echo '</tr>';
        while($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>'. $row['id'] . '</td>';
            echo '<td>'. $row['name'] . '</td>';
            echo '</tr>';    
        }
        echo '</table>';
    }
    ?>
</main>
</html>