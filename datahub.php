<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Rowey's Playground</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <script src="https://kit.fontawesome.com/502f247d2b.js" crossorigin="anonymous"></script>
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
        body, html {height: 100%; line-height: 1.8;}
        /* Full height image header */
        .bgimg-1 {background-position: center; background-size: cover; background-image: url('/styles/images/home.jpg'); min-height: 50%;}
        .w3-bar .w3-button {padding: 16px;}
    </style>
</head>
<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="/index.php" class="w3-bar-item w3-button w3-wide">Rowey's Playground</a>
        <!-- Right-sided navbar links -->
        <div class="w3-hide-small">
            <a href="/index.php" class="w3-bar-item w3-button"> Home</a>
            <a href="/about.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> About</a>
            <a href="/datahub.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> DataHub</a>
            <a href="/contact.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Contact</a>
            <!--  <a href="/login.php" class="w3-bar-item w3-button w3-right"><i class="fa fa-sign-in"> </i> Login</a> -->
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
    <!--<a href="/login.php" onclick="w3_close()" class="w3-bar-item w3-button">Login</a>-->
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container" id="home"></header>

<!-- About Section -->
<div class="w3-container" style="padding:80px 16px" id="about">
  <h2 class="w3-center">DataHub</h2>
  <p class="w3-center w3-large">Datasets in to separate categories</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-third">
      <i class="fa fa-microchip w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-xlarge">1v1 Match Data</p>
      <p>1v1 Match Data from all the tournaments collected in a visual representation to allow for more interesting results.</p>
      <a class="w3-btn w3-round w3-border" type="submit" href="/public/1v1Data.php">1v1 Match Data</a>
    </div>
    <div class="w3-third">
      <i class="fa fa-user w3-margin-bottom w3-jumbo"></i>
      <p class="w3-xlarge">Player Data</p>
      <p>All the data that is relevant to the player from all the matches that have been played.</p>
      <a class="w3-btn w3-round w3-border" type="submit" href="/public/playerData.php">Link to Player Data</a>
    </div>
    <div class="w3-third">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-xlarge">Tournament Data</p>
      <p>Collated Data from each specific tournament event. This can provide some intriguing stats.</p>
      <a class="w3-btn w3-round w3-border" type="submit" href="/public/tournamentData.php">Link to Tournament Data</a>
    </div>
  </div>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
      <div class="w3-full">
          <i class="fa fa-map w3-margin-bottom w3-jumbo w3-center"></i>
          <p class="w3-xlarge">Maps</p>
          <p>All the maps that are uses in tournament matches.</p>
          <a class="w3-btn w3-round w3-border" type="submit" href="/public/mapData.php">Maps</a>
      </div>
  </div>


</div>
<script>

// Toggle between showing and hiding the sidebar when clicking the menu icon
const mySidebar = document.getElementById("mySidebar");

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