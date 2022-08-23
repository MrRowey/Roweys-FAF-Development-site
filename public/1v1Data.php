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
    <title>About</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <script src="https://kit.fontawesome.com/502f247d2b.js" crossorigin="anonymous"></script>
    <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

    body, html {
      height: 100%;
      line-height: 1.8;
    }

    /* Full height image header */
    .bgimg-1 {
      background-position: center;
      background-size: cover;
      background-image: url('/styles/images/datahub.jpg');
      min-height: 20%;
    }

    .w3-bar .w3-button {
      padding: 16px;
    }
    </style>
  </head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="/index.php" class="w3-bar-item w3-button w3-wide">Rowey Dev</a>
    <!-- Right-sided navbar links -->
    <div class="w3-hide-small">
      <a href="/index.php" class="w3-bar-item w3-button"> Home</a>
      <a href="/about.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> About</a>
      <a href="/datahub.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> DataHub</a>
      <a href="/contact.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Contact</a>
      <a href="/login.php" class="w3-bar-item w3-button w3-right"><i class="fa fa-sign-in"> </i> Login</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-dark-gray w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="/index.php" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
    <a href="/about.php" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
    <a href="/datahub.php" onclick="w3_close()" class="w3-bar-item w3-button">DataHub</a>
    <a href="/contact.php" onclick="w3_close()" class="w3-bar-item w3-button">Contact</a>
    <a href="/login.php" onclick="w3_close()" class="w3-bar-item w3-button">Login</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container" id="home"></header>

<!-- About Section -->
<div class="w3-container" style="padding:50px 16px" id="about">
  <h3 class="w3-center">1v1 Tournament Data</h3>
  <p class="w3-center w3-large">All data from selected Tournament</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    
    <div class="w3-container">
        <select class="w3-select w3-left" name="option" style="width:20%;">
            <option value="" disabled selected>Filter By Player</option>
            <option value=""></option>
            <option value="1"></option>
            <option value="1"></option>
        </select>
        
        <select class="w3-select w3-left" name="option" style="width:20%;">
            <option value="" disabled selected>Filter By Opponent</option>
            <option value=""></option>
            <option value="1"></option>
            <option value="1"></option>
        </select>

        <select class="w3-select w3-left" name="option" style="width:20%;">
            <option value="" disabled selected>Filter By Faction</option>
            <option value=""></option>
            <option value="1"></option>
            <option value="1"></option>
        </select>

        <select class="w3-select w3-left" name="option" style="width:20%;">
            <option value="" disabled selected>Filter By Map</option>
            <option value=""></option>
            <option value="1"></option>
            <option value="1"></option>
        </select>

        <select class="w3-select w3-left" name="option" style="width:20%;">
            <option value="" disabled selected>Filter By Tournament</option>
            <option value=""></option>
            <option value="1"></option>
            <option value="1"></option>
        </select>
    </div>
    <br>

    <table class="w3-table w3-card-4 w3-striped w3-centered w3-hoverable">
        <tr>
            <th>ID</th>
            <th>Player Name</th>
            <th>Player Faction</th>
            <th>Opponent Name</th>
            <th>Opponent Faction</th>
            <th>Map Name</th>
            <th>Match Result</th>
            <th>Replay ID</th>
            <th>Tournament Name</th>
            <th>Year</th>
        </tr>
        <tr>
            <td>23</td>
            <td>Tagada</td>
            <td>UEF</td>
            <td>Yudi</td>
            <td>Cybran</td>
            <td>Loki</td>
            <td>Win</td>
            <td>2536262565</td>
            <td>Summer Invitaional</td>
            <td>2022</td>
        </tr>
        <tr>
            <td>24</td>
            <td>Yudi</td>
            <td>Cybran</td>
            <td>Tagada</td>
            <td>UEF</td>
            <td>Loki</td>
            <td>Loss</td>
            <td>2536262565</td>
            <td>Summer Invitaional</td>
            <td>2022</td>
        </tr>    
    </table>


  </div>
</div>
 
<script>

// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
