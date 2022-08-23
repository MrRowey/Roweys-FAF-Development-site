<?php
session_start();
$conn = mysqli_connect('localhost','datahubAdmin','eOv5dzTSf!]bZ[1L','datahub');

if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (!isset($_POST['username'], $_POST['password'])) {
    exit('Please enter your Username and Password');
}

if ($stmt = $conn->prepare('SELECT id, password FROM accounts WHERE username = ?')) {

    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // account exists and verify the password
        // remember to use password_hash in registration file to store the hashed passwords
        if (password_verify($_POST['password'], $password)) {
            // verification successful
            // create session to know the user is logging acting like a cookie
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: ../admin/adminDashboard.php');
        } else {
            echo 'Incorrect username or password[1]';
            // incorrect password
        }
    } else {
        echo ' incorrect username or password[2]!';
        // incorrect username
    }
    $stmt->close();
}