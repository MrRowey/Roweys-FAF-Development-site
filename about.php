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
    .bgimg-1 {background-position: center; background-size: cover; background-image: url('/styles/images/home.jpg'); min-height: 60%;}
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
<div class="w3-container" style="padding:90px 16px" id="about">
  <h3 class="w3-center">About This Site</h3>
  <h4 class="w3-center w3-large">Main features</h4>
  <div class="w3-row-padding w3-center" style="margin-top:30px">
    <div class="w3-col">
      <p> The Aim of this site it to act as a playground for me while im learning at University. <br>
          I was given an opportunity to work on this idea as I was approached by a FAF Player by the name of Hemfast. <br>
          He provide me as the Promotions Team-Lead a Document containing records of all 1v1 tournaments with a prize pool of <br>
          more than $50, this Document Contains over 5500 Records dating back to 2015. The First Main Project for this site <br>
          will be to use the data he kindly provides and have its displays in a format that all can access with more data manipulation. <br><br>

          I would also like to give a Mention to Phong for Providing me with 2 custom images for MapGenerator maps & records tha are <br>
          missing a map so im able to still included them and uses all the other data with missing maps.
      </p>
      <h5 class="w3-center">- Rowey</h5>
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