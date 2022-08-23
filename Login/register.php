<?php
// Connecting to the Database
$conn = mysqli_connect('localhost','datahubAdmin','eOv5dzTSf!]bZ[1L','datahub');

if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (!isset($_POST['username'], $_POST['password'])) {
    exit('Please complete the sign up form');
}

if (empty($_POST['username']) || empty($_POST['password'])) {
    exit('Place complete the sing up form');
}

//if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['username']) == 0) {
//    exit('Username is not valid');
//}

// Checking if the username already exists
if ($stmt = $conn->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
    // binding the parameters (s = string, i = int ect), has the password using php password_hash function.
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();
    // store the resoled, so we can check if it is already in the DB
    if ($stmt->num_rows > 0) {
        echo ' Username Already Exists, please choose another one';
        header('Location: ../signup.php');
    } else {
        // username does not exist, insert new account
        if ($stmt = $conn->prepare('INSERT INTO accounts (username, password) VALUES (?, ?)')) {
            // to prevent exposing passwords in the db we encrypted them by hashing them
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt->bind_param('ss', $_POST['username'], $password);
            $stmt->execute();
            echo 'You have successfully registered, you can now login';
            sleep(2);
            //header('Location: ../index.php');
        } else {
            // something wrong with SQL statement
            echo 'Could not prepare statement!';
        }
    }
}
$conn->close();