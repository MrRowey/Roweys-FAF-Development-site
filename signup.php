<?php
$conn = mysqli_connect('localhost','datahubAdmin','eOv5dzTSf!]bZ[1L','datahub');

if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

?>
<html>
<head>
        <title>SignUp</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <script src="https://kit.fontawesome.com/502f247d2b.js" crossorigin="anonymous"></script>
        <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
        body, html { height: 100%; line-height: 1.8;}
        /* Full height image header */
        .bgimg-1 { background-position: center; background-size: cover; background-image: url('/styles/images/about.jpg'); min-height: 100%; opacity: 100%;}
        .w3-bar .w3-button { padding: 16px;}
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
<header class="bgimg-1 w3-display-container" id="home">
  <div>
    <form class="w3-container w3-display-middle w3-card-4 w3-light-grey w3-margin w3-round-large" action="/login/register.php" method="post" autocomplete="off">
      <h2 class="w3-center">SignUp</h2>
      <!-- Username-->
      <div class="w3-row w3-section">
        <div class="w3-col" style="width: 50px;"><i class="w3-xxlarge fa fa-user"></i></div>
          <div class="w3-rest">
            <input class="w3-input w3-round-medium" type="text" name="username" placeholder="Username" id="username" required>
          </div>
      </div>
      <!-- Password-->
      <div class="w3-row w3-section">
        <div class="w3-col" style="width: 50px;"><i class="w3-xxlarge fa fa-lock"></i></div>
          <div class="w3-rest">
            <input class="w3-input w3-round-medium" type="password" name="password" placeholder="Password" id="password" required>
          </div>
      </div>
      <button class="w3-button w3-block w3-section w3-border w3-round w3-ripple w3-padding w3-hover-green" type="submit">SignUp</button>
    </form>
  </div>
</header>
</body>
</html>