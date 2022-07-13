<html>
<head>
    <title>Roweys FAF Development Site</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <style>
      body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
      body, html { height: 100%; color: #777; line-height: 1.8;}

      /* Create a Parallax Effect */
      .bgimg-1 { background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover;}

      /* First image (Logo. Full height) */
      .bgimg-1 { background-image: "/styles/images/commingsoon.jpg"; min-height: 100%; }

      .w3-wide {letter-spacing: 10px;}
      .w3-hover-opacity {cursor: pointer;}

      /* Turn off parallax scrolling for tablets and phones */
      @media only screen and (max-device-width: 1600px) { 
        .bgimg-1 {background-attachment: scroll; min-height: 400px;}}
    </style>



</head>
<body>
  <!-- Navbar top -->
  <div class="w3-top">
    <div class="w3-bar" id="myNavbar">
      <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>  
      </a>
      <a href="/index.php" class="w3-bar-item w3-button">Home</a>
      <a href="#about" class="w3-bar-item w3-button w3-hide-small"> About</a>
      <a href="#1v1" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"> 1v1 Tourny Data</a>
      <a href="#1v1" class="w3-bar-item w3-button w3-hide-small w3-right"><i class="fa fa-user"></i> Login</a>
    </div>

    <div id="mobileNav" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
      <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
      <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    </div>
  </div>




  <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
      <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">MY <span class="w3-hide-small">WEBSITE</span> LOGO</span>
    </div>
  </div>

</body>
</html>