<?php
include('../publicDBConfig.php');

if (!isset($_POST['Username'], $_POST['Password'])) {
    exit('Please complete the sign up form');
}

if (empty($_POST['Username']) || empty($_POST['Password'])) {
    exit('Plase complete the sing up form');
}

//if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['username']) == 0) {
//    exit('Username is not valid');
//}

// Checking if the username allready exisists
if ($stmt = $conn->prepare('SELECT ID, Password FROM accounts WHERE Username = ?')) {
    // bining the parameters (s = strin, i = int ect), has the passowrd using php password_hash function.
    $stmt->bind_param('s', $_POST['Username']);
    $stmt->execute();
    $stmt->store_result();
    // store the resole so we can check if it is allreay in the DB
    if ($stmt->num_rows > 0) {
        echo ' Username Allready Exsits, please choost another one';
        header('Location: ../signup.php');
    } else {
        // username dose not existe, insert new account
        if ($stmt = $conn->prepare('INSERT INTO accounts (Username, Password) VALUES (?, ?)')) {
            // to prevent exposing passwords in the db we encripted them by hashing them
            $password = password_hash($_POST['Password'], PASSWORD_DEFAULT);
            $stmt->bind_param('ss', $_POST['Username'], $password);
            $stmt->execute();
            echo 'You have successfully registerd, you can now login';
            sleep(2);
            header('Location: ../admin/adminDashboard.php');
        } else {
            // somthing worng with SQL statmenet
            echo 'Could not prepare staement!';
        }
    }
}
$conn->close();
?>