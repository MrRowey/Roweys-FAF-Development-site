<?php
// Connecting to the Database
$conn = mysqli_connect('localhost','datahubPub','*MQ8[RdqAaD2V9XK','datahub');

if (mysqli_connect_errno()) {
// If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (isset($_POST['username'])) {
    $username = stripcslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);

    // checking that the user is in the database
    $query = "SELECT * from `accounts` WHERE username='$username' AND password='" . md5($password) . "'";
    $result = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);
    if($rows == 1) {
        $_SESSION['username'] = $username;
        // redirect to dashboard page
        header("Location: ../admin/adminDashboard.php");
    } else {
        echo "<p> Incorret Username or Password </p>";
    }
} else

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
            min-height: 100%;
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
        <a href="/index.php" class="w3-bar-item w3-button w3-wide">Rowey's Playground</a>
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
    <?php { ?>
    <form class="w3-container w3-display-middle w3-card-4 w3-light-grey w3-margin w3-round-large" method="post">
      <h2 class="w3-center">Login</h2>
      <!-- Username-->
      <div class="w3-row w3-section">
          <div class="w3-col" style="width: 50px;"><i class="w3-xxlarge fa fa-user"></i></div>
              <div class="w3-rest">
                  <input class="w3-input" type="text" name="username" placeholder="Username" autofocus="true">
              </div>
      </div>
      <!-- Password-->
      <div class="w3-row w3-section">
          <div class="w3-col" style="width: 50px;"><i class="w3-xxlarge fa fa-lock"></i></div>
              <div class="w3-rest">
                  <input class="w3-input" type="password" name="password" placeholder="Password">
              </div>
      </div>
      <button class="w3-button w3-block w3-section w3-border w3-round w3-ripple w3-padding" type="submit" name="submit">Login</button>
    </form>
    <?php
    }
    ?>
  </div>
</header>
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