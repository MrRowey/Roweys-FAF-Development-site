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
          background-image: url('/styles/images/contact.jpg');
          min-height: 60%;
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
    


<!-- Work Section
<div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center">OUR WORK</h3>
  <p class="w3-center w3-large">What we've done for people</p>
</div>

-->

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:90px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Below are the beLets get in touch. Send us a message:</p>
  <div class="w3-center" style="margin-top:48px">
    <p><i class="fa fa-github fa-fw w3-xxlarge w3-margin-right"></i><a href="https://github.com/MrRowey" style="text-decoration:none;">MrRowey</a></p>
    <p><i class="fa fa-twitter fa-fw w3-xxlarge w3-margin-right"></i><a href="https://twitter.com/MrRowey" style="text-decoration:none ;" >@MrRowey</a></p>
    <p><i class="fa-brands fa-discord fa-fw w3-xxlarge w3-margin-right"></i> #9361 Rowey</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Rowey.lab@gmail.com</p>
    <!-- Image of location/map -->
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
