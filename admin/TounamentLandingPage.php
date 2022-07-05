<!DOCTYPE html>
<html>
<head>
    <title>FAF Tournament Match Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <linl rel="stylesheet" href="../routes/nav.css">
    <style>
        /* Light Theme  */
        .w3-theme-main-light {color:#fff !important; background-color:#070928 !important}
        .w3-theme-acc1-light {background-color:#6C72CB !important}
        .w3-theme-acc2-light {background-color:#CD69C1 !important}
        

        /* Dark Theme  */
        .w3-theme-main-dark {color:#EEEDF0 !important; background-color:#17181f !important}
        .w3-theme-acc1-dark {background-color:#3456FF !important}
        .w3-theme-acc2-dark {background-color:#F8F8FA !important}

    </style>

</head>
<nav class="w3-bar w3-blue">
    <a href="/index.php" class="w3-bar-item w3-button w3-mobile">Home</a>
    <a href="/pages/1v1.php" class="w3-bar-item w3-button w3-mobile">1v1 Match Data</a>
    <a href="/pages/AddData.php" class="w3-bar-item w3-button w3-mobile">Add Data</a>
    <!--<a href="#" class="w3-bar-item w3-button w3-mobile">Link 2</a>-->
    <a href="/login.php" class="w3-bar-item w3-button w3-mobile" style="float: right;" >Login</a>
</nav>

<label for="theme" class="theme">
    <span>Light</span>
    <span class="theme__toggle-wrap">
        <input id="theme" class="theme__toggle" type="checkbox" role="switch" name="theme" value="dark">
        <span class="theme__fill"></span>
        <span class="theme__icon">
            <span class="theme__icon-part"></span>
            <span class="theme__icon-part"></span>
            <span class="theme__icon-part"></span>
            <span class="theme__icon-part"></span>
            <span class="theme__icon-part"></span>
            <span class="theme__icon-part"></span>
            <span class="theme__icon-part"></span>
            <span class="theme__icon-part"></span>
            <span class="theme__icon-part"></span>
        </span>
    </span>
    <span>Dark</span>
</label>


<main >
    <h1> FAF Tournament Match Data</h1>
    <p> This site is to display and look up Tournament data. Currenly 1v1 Data is only mesured at anything with a min of $50 Prize pool</p>
    <img src="/images/1.jpg" alt="FAF Image">
</main>
</html>