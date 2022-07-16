<html>
<head>
    <title>SignUp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<nav class="w3-bar w3-blue">
    <a href="/index.php" class="w3-bar-item w3-button w3-mobile">Home</a>
    <a href="/pages/1v1.php" class="w3-bar-item w3-button w3-mobile">1v1 Match Data</a>
    <!--<a href="#" class="w3-bar-item w3-button w3-mobile">Link 2</a>-->
    <a href="/login.php" class="w3-bar-item w3-button w3-mobile" style="float: right;">Login</a>
</nav>
<main class="w3-container" >
    <h1 class="w3-text-blue">SignUp</h1>
    <form class="w3-containter" action="/Registration/register.php" method="POST" autocomplete="off">
        <p>
            <label class="w3-text-blue"><b>Username</b></label>
            <input class="w3-input w3-border" type="text" name="username" placeholder="Username" id="username" required>
        </p>
        <p>
            <label class="w3-text-blue"><b>Password</b></label>
            <input class="w3-input w3-border" type="password" name="password" placeholder="Password" id="password" required>
        </p>
        <p>
            <button class="w3-btn w3-blue" type="submit">SignUp</button>
            <a href="/login.php">have an accout Login here</a>
        </p>
    </form>
</main>
</html>