<?php
// Connecting to the Database
//$conn = mysqli_connect('localhost','datahubPub','*MQ8[RdqAaD2V9XK','datahub');
//
//if (mysqli_connect_errno()) {
//// If there is an error with the connection, stop the script and display the error.
//    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
//}

//if (isset($_POST['username'])) {
//    $username = stripcslashes($_REQUEST['username']);
//    $username = mysqli_real_escape_string($conn, $username);
//    $password = stripslashes($_REQUEST['password']);
//    $password = mysqli_real_escape_string($conn, $password);
//
//    // checking that the user is in the database
//    $query = "SELECT * from `accounts` WHERE username='$username' AND password='" . md5($password) . "'";
//    $result = mysqli_query($conn, $query);
//    $rows = mysqli_num_rows($result);
//    if($rows == 1) {
//        $_SESSION['username'] = $username;
//        // redirect to dashboard page
//        header("Location: ../admin/adminDashboard.php");
//    } else {
//        echo "<p> Incorret Username or Password </p>";
//    }
//} else

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta Tag  -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Styling -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="/styles/login.css" />

    <title>Rowey's Playground</title>
  </head>
  <body class="text-center">
    <main class="form-signin w-100 m-auto">
      <form>
        <img class="mb-4" src="#" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please Sign In</h1>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <lable for="floatingInput">Email</lable>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingInput" placeholder="Password">
            <lable for="floatingInput">Password</lable>
        </div>

        <div class="checkbox mb-3">
            <lable>
                <input type="checkbox" value="remember-me"> Remember me
            </lable>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      </form>
    </main>
  </body>



  
<body>
</html>