<?php
$conn = mysqli_connect('localhost','datahubAdmin','eOv5dzTSf!]bZ[1L','datahub');

if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

# Getting Default Tables

## Get Players Usernames
$PlayersSQL = 'SELECT p.username as player, o.username as opponent FROM players as p JOIN players as o ON p.username = o.username';
$PlayersResult = mysqli_query($conn, $PlayersSQL);

### Player Username

### Opponent Username

## Get Factions
$FactionSQL = 'SELECT * FROM faction';
$FactionResult = mysqli_query($conn, $FactionSQL);

## Get Maps
$MapsSQL = 'SELECT * FROM maps';
$MapsResult = mysqli_query($conn, $MapsSQL);

## Get Tournaments
$TourneySQL = 'SELECT * FROM tournaments';
$TourneyResult = mysqli_query($conn, $TourneySQL);

## Win Conditions
$WinConditionSQL = 'SELECT * FROM match_result';
$WinConditionResult = mysqli_query($conn, $WinConditionSQL);


# Drop Down Selection Menus

## Player
$Player = $PlayersResult;

## Opponent
$Opponent = $PlayersResult;

## Win Conditions
$Win = $WinConditionResult;

## Player Faction
$PlayerFaction = $FactionResult;

## Opponent Faction
$OpponentFaction = $FactionResult;

## Map
$Map = $MapsResult;

# Tournament
$Tourney = $TourneyResult;



?>
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
            min-height: 20%;
        }

        .w3-bar .w3-button {
            padding: 16px;
        }
    </style>
</head>
<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="/index.html" class="w3-bar-item w3-button w3-wide">Rowey Dev</a>
        <!-- Right-sided navbar links -->
        <div class="w3-hide-small">
            <a href="/index.html" class="w3-bar-item w3-button"> Home</a>
            <a href="/about.html" class="w3-bar-item w3-button"><i class="fa fa-user"></i> About</a>
            <a href="/datahub.html" class="w3-bar-item w3-button"><i class="fa fa-th"></i> DataHub</a>
            <a href="/contact.html" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Contact</a>
            <a href="/login.html" class="w3-bar-item w3-button w3-right"><i class="fa fa-sign-in"> </i> Login</a>
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
    <a href="/index.html" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
    <a href="/about.html" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
    <a href="/datahub.html" onclick="w3_close()" class="w3-bar-item w3-button">DataHub</a>
    <a href="/contact.html" onclick="w3_close()" class="w3-bar-item w3-button">Contact</a>
    <a href="/login.html" onclick="w3_close()" class="w3-bar-item w3-button">Login</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container" id="home"></header>




<main class="w3-container">
    <form class="w3-container" action="/data/matchData.php" method="POST" style="width:100%;">
        <div class="w3-row-padding">
            <!-- Tournament -->
            <div class="w3-third">
                <label class="w3-text-blue" for="tourney">Select Match Tournament</label>
                <select class="w3-select w3-border " name="tourney" id="tourney">
                <option value="" style="color: black" disabled selected>Please Select a Tournament</option>
                <?php while ($row = mysqli_fetch_array($Tourney)) {
                    echo '<option value="' . $row['ID'] . '">' . $row['name'] . '</option>';
                }?>
                </select>
            </div>
            <!-- ReplayID -->
            <div class="w3-third">
                <label class="w3-text-blue" for="replay">Replay ID:</label>
                <input class="w3-input w3-border" name="replay" id="replay" type="number">
            </div>
            <!-- Win Condition -->
            <div class="w3-third">
                <label class="w3-text-blue" for="Win">Match Win Condition</label>
                <select class="w3-select w3-border" name="Win" id="Win">
                <option value="" style="color: black" disabled selected>Please Select a Win Result</option>
                <?php while($row = mysqli_fetch_array($Win)) {
                    echo '<option value="' . $row['ID'] . '">' . $row['result'] . '</option>';
                }?>
                </select>
            </div>
        </div><br>
        <div class="w3-row-padding">
            <!-- Player -->
            <div class="w3-half">
                <label for="Player">Player</label>
                <select class="w3-select w3-border" name="Player" id="Player">
                    <option value="" style="color: black" disabled selected>Select Player</option>
                    <?php while($row = mysqli_fetch_array($Player)) {
                        echo '<option value="' . $row['ID'] . '">' . $row['player'] . '</option>';
                    }?>
                </select>
            </div>
            <!-- Opponent -->
            <div class="w3-half">
                <label for="Opponent">Opponent
                </label>
                <select class="w3-select w3-border" name="Opponent" id="Opponent">
                    <option value="" style="color: black" disabled selected>Select Opponent</option>
                    <?php while($row = mysqli_fetch_array($Opponent)) {
                        echo '<option value="' . $row['ID'] . '">' . $row['opponent'] . '</option>';
                    }?>
                </select>
            </div>
        </div><br>
        <div class="w3-row-padding">         
            <div class="w3-half">
                <label for="pFaction">Player Faction</label>
                <select class="w3-select w3-border" name="pFaction" id="pFaction">
                    <option value="" disabled selected>Select Player Faction</option>
                    <?php while($row = mysqli_fetch_array($PlayerFaction)) {
                        echo '<option value="' . $row['ID'] . '">' . $row['name'] . '</option>';
                    }?>
                </select>
            </div>
            <div class="w3-half">
                <!-- Opponent Faction -->
                <label for="oFaction">Opponet Faction</label>
                <select class="w3-select w3-border" name="oFaction" id="oFaction">
                    <option value="" disabled selected>Select Opponent Faction</option>
                    <?php while($row = mysqli_fetch_array($OpponentFaction)) {
                        echo '<option value="' . $row['ID'] . '">' . $row['name'] . '</option>';
                    }?>
                </select>
            </div>
        </div><br>
        <div class="w3-row-padding">
            <div class="w3-third">
                <!-- Map -->
                <label for="map">Map Played On</label>
                <select class="w3-select w3-border" name="map" id="map">
                    <option value="" disabled selected>Select Map</option>
                    <?php while($row = mysqli_fetch_array($Map)) {
                        echo '<option value="' . $row['ID'] . '">' . $row['name'] . '</option>';
                    }?>
                </select>
            </div>
            <div class="w3-third">
                <!-- Finals -->
                <label for="final">In the Finals? (Yes or No):</label>
                <input class="w3-input w3-border" name="final" id="final" type="text">
            </div>
            <div class="w3-third">
            <!-- Winnings ($) -->
            <label for="prize">Enter any Winings</label>
            <input class="w3-input w3-border" name="prize" id="prize" type="number">
            </div>
        </div>
    </form>   
</main>
</html>